<?php
/**
 * Plugin Name:   Bibla.al start
 * Plugin URI:    https://bibla.al
 * Description:   Përdor shortcode [start] për të paraqitur përmbajtjen. Një oreks ndjellës për të filluar leximin e biblës.
 * Version:       2.1.0
 * Author:        Marsel Preci
 * Author URI:    https://gremza.com
 * Text Domain:   bibla-al-start
 * Domain Path:   /languages
 * License:       GPLv2
 * License URI:   https://www.gnu.org/licenses/gpl-2.0.html
 */

if ( ! defined( 'ABSPATH' ) ) exit;

function bibla_al_start_shortcode() {
    $response = wp_remote_get('https://devocion.bibla.al');

    if (is_wp_error($response)) {
        return '<div>Could not retrieve data.</div>';
    }

    $json = json_decode(wp_remote_retrieve_body($response), true);
    if (empty($json['todayverse'])) {
        return '<div>No verse data available.</div>';
    }

    $acf = $json['todayverse'];
    ob_start();
    ?>
    <style>
        svg {
            width: 25px;
            height: 25px;
            fill: <?php echo esc_attr($acf['txt_color']); ?>;
        }
        .center {
            margin: auto;
            max-width: 600px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .vargucontent {
            background-image: url('<?php echo esc_url($acf['bg_image']); ?>');
            background-size: cover;
            text-align: center;
            padding: 20px;
            margin: auto;
            color: <?php echo esc_attr($acf['txt_color']); ?>;
            border-radius: 20px;
            box-shadow: 0px 0px 11px #ccc;
        }
        .vargucontent a {
            color: <?php echo esc_attr($acf['txt_color']); ?> !important;
            font-weight: bold;
        }
        .lexoneapp {
            font-size: 12px;
            float: right;
            padding-top: 20px;
        }
        .referenca {
            font-size: 12px;
            float: left;
            padding-top: 20px;
        }
        .vargustory {
            font-size: 18px;
        }
    </style>

    <?php if (!empty($acf['content'])): ?>
        <div class="vargucontent">
            <h2><?php echo esc_html($acf['title']); ?></h2>
            <div class="vargustory"><?php echo esc_html($acf['content']); ?></div>
            <div class="referenca">
                <?php echo esc_html($acf['book_name'] . ' ' . $acf['chapter_name'] . ':' . $acf['verse_number']); ?>
            </div>
            <div class="lexoneapp">
                Më shumë në app
                <span>
                    <a href="https://apps.apple.com/us/app/bibla-shqip-bibla-al/id6463127209">
                        📱 iOS
                    </a>
                </span>
                <span>
                    <a href="https://play.google.com/store/apps/details?id=com.gremza.bibla&hl=en&gl=US">
                        📱 Android
                    </a>
                </span>
            </div>
        </div>
    <?php endif;
    return ob_get_clean();
}

// Register shortcode on init
add_action('init', function () {
    add_shortcode('start', 'bibla_al_start_shortcode');
});
