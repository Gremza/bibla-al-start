<?php
/**
 * Bibla.al start
 *
 * @package       BIBLAALST
 * @author        Marsel Preci
 * @license       gplv2
 * @version       1.0.0
 *
 * @wordpress-plugin
 * Plugin Name:   Bibla.al start
 * Plugin URI:    https://bibla.al
 * Description:   Perdor shortcode [start] per te paraqitur permbajtjen.Nje oreks ndjelles per te filluar leximin e bibles.
 * Version:       1.0.0
 * Author:        Marsel Preci
 * Author URI:    https://gremza.com
 * Text Domain:   bibla-al-start
 * Domain Path:   /languages
 * License:       GPLv2
 * License URI:   https://www.gnu.org/licenses/gpl-2.0.html
 *
 * You should have received a copy of the GNU General Public License
 * along with Bibla.al start. If not, see <https://www.gnu.org/licenses/gpl-2.0.html/>.
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;
function start() {  
    $string =  file_get_contents('https://api1.bibla.al/wp-json/wp/v2/posts/8'); 
    $json_a = json_decode($string, true);
    $acf= $json_a['acf'];   
 echo $acf['vargu']; 
    echo "</br>";
    echo    "<a href=".home_url()."/". $acf['slugvargu'].">". $acf['titulli_vargut'] . "</a>"; 
          echo "</br>";
    echo $acf['devocioni']; 

}    
function readmore() {
    wp_enqueue_script( 'readmore-js', plugins_url( '/readmore.js', __FILE__ ));
      wp_enqueue_style( 'readmore-css',   plugins_url( '/readmore1.css', __FILE__ ));
}
 
add_action( 'wp_footer', 'readmore' );   

  
	// register shortcode
add_shortcode('start', 'start'); 

