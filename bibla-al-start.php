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
 * Version:       2.0.0
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
    $string =  file_get_contents('https://devocion.bibla.al'); 
    $json_a = json_decode($string, true);
    $acf= $json_a['todayverse'];   
	$stories=$json_a['stories']; 
//	echo $acf['content']; echo "</br>";
//	echo $acf['bg_image']; echo "</br>";
//	echo $acf['txt_color']; echo "</br>";
//	echo $acf['book_name']; echo "</br>";
//	echo $acf['chapter_name']; echo "</br>";
//	echo $acf['verse_number']; echo "</br>";
	?>
<style>
 svg{
     width:25px;
     height:25px;
     	fill:<?php echo $acf['txt_color'];?>;
 }
	.vargucontent{
		background-image:url('<?php echo $acf['bg_image'];?>');
		background-size:cover;
		text-align:center;
		padding:20px; 
		margin:auto;
		color:<?php echo $acf['txt_color'];?>;
		border-radius:20px;
		box-shadow:0px 0px 11px #ccc;  
	    
	}
		.vargucontent a {
		    	color:<?php echo $acf['txt_color'];?>!important;
		    	font-weight:bold;
		}
	.lexoneapp{
		font-size:12px;
		float:right;
		padding-top:20px;
	} 
	.referenca{
		font-size: 12px;
		float: left;
		padding-top: 20px;
	}
	.vargu{
		font-size:18px; 
	}
</style> 
<?php if ($acf['content']):?>
 <div class="vargucontent"> 
	<h2><?php echo $acf['title'];?></h2>
	<div class="vargu"><?php echo $acf['content'];?></div>
	<div class="referenca"><?php echo $acf['book_name'].' '.$acf['chapter_name'].':'.$acf['verse_number'];?></div>	
	<div class="lexoneapp">Më shumë në app <span><a href="https://apps.apple.com/us/app/bibla-shqip-bibla-al/id6463127209"> <?xml version="1.0" encoding="iso-8859-1"?>
<!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
<svg    version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
	 viewBox="0 0 22.773 22.773" xml:space="preserve">
<g>
	<g>
		<path d="M15.769,0c0.053,0,0.106,0,0.162,0c0.13,1.606-0.483,2.806-1.228,3.675c-0.731,0.863-1.732,1.7-3.351,1.573
			c-0.108-1.583,0.506-2.694,1.25-3.561C13.292,0.879,14.557,0.16,15.769,0z"/>
		<path d="M20.67,16.716c0,0.016,0,0.03,0,0.045c-0.455,1.378-1.104,2.559-1.896,3.655c-0.723,0.995-1.609,2.334-3.191,2.334
			c-1.367,0-2.275-0.879-3.676-0.903c-1.482-0.024-2.297,0.735-3.652,0.926c-0.155,0-0.31,0-0.462,0
			c-0.995-0.144-1.798-0.932-2.383-1.642c-1.725-2.098-3.058-4.808-3.306-8.276c0-0.34,0-0.679,0-1.019
			c0.105-2.482,1.311-4.5,2.914-5.478c0.846-0.52,2.009-0.963,3.304-0.765c0.555,0.086,1.122,0.276,1.619,0.464
			c0.471,0.181,1.06,0.502,1.618,0.485c0.378-0.011,0.754-0.208,1.135-0.347c1.116-0.403,2.21-0.865,3.652-0.648
			c1.733,0.262,2.963,1.032,3.723,2.22c-1.466,0.933-2.625,2.339-2.427,4.74C17.818,14.688,19.086,15.964,20.67,16.716z"/>
	</g>
	<g>
	</g>
	<g>
	</g>
	<g>
	</g>
	<g>
	</g>
	<g>
	</g>
	<g>
	</g>
	<g>
	</g>
	<g>
	</g>
	<g>
	</g>
	<g>
	</g>
	<g>
	</g>
	<g>
	</g>
	<g>
	</g>
	<g>
	</g>
	<g>
	</g>
</g>
</svg></a></span> <span><a href="https://play.google.com/store/apps/details?id=com.gremza.bibla&hl=en&gl=US">  

<?xml version="1.0" encoding="iso-8859-1"?>
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
<svg   version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"    viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">

<g id="b75708d097f2188dff6617b0f00f7c43">

<path display="inline" d="M120.606,169h270.788v220.663c0,13.109-10.628,23.737-23.721,23.737h-27.123v67.203
		c0,17.066-13.612,30.897-30.415,30.897c-16.846,0-30.438-13.831-30.438-30.897v-67.203h-47.371v67.203
		c0,17.066-13.639,30.897-30.441,30.897c-16.799,0-30.437-13.831-30.437-30.897v-67.203h-27.099
		c-13.096,0-23.744-10.628-23.744-23.737V169z M67.541,167.199c-16.974,0-30.723,13.963-30.723,31.2v121.937
		c0,17.217,13.749,31.204,30.723,31.204c16.977,0,30.723-13.987,30.723-31.204V198.399
		C98.264,181.162,84.518,167.199,67.541,167.199z M391.395,146.764H120.606c3.342-38.578,28.367-71.776,64.392-90.998
		l-25.746-37.804c-3.472-5.098-2.162-12.054,2.946-15.525c5.102-3.471,12.044-2.151,15.533,2.943l28.061,41.232
		c15.558-5.38,32.446-8.469,50.208-8.469c17.783,0,34.672,3.089,50.229,8.476L334.29,5.395c3.446-5.108,10.41-6.428,15.512-2.957
		c5.108,3.471,6.418,10.427,2.946,15.525l-25.725,37.804C363.047,74.977,388.055,108.175,391.395,146.764z M213.865,94.345
		c0-8.273-6.699-14.983-14.969-14.983c-8.291,0-14.99,6.71-14.99,14.983c0,8.269,6.721,14.976,14.99,14.976
		S213.865,102.614,213.865,94.345z M329.992,94.345c0-8.273-6.722-14.983-14.99-14.983c-8.291,0-14.97,6.71-14.97,14.983
		c0,8.269,6.679,14.976,14.97,14.976C323.271,109.321,329.992,102.614,329.992,94.345z M444.48,167.156
		c-16.956,0-30.744,13.984-30.744,31.222v121.98c0,17.238,13.788,31.226,30.744,31.226c16.978,0,30.701-13.987,30.701-31.226
		v-121.98C475.182,181.14,461.458,167.156,444.48,167.156z">

</path>

</g>

</svg>

</a></span></div>
</div>
<?php endif; ?>
 <?php		
//	foreach ($stories as $k=>$v){
		
//     if( isset($v['type'])) {echo $v['type']; echo "</br>";};
//	 if( isset($v['link'])) {echo $v['link']; echo "</br>";};  
//	 if( isset($v['content'])) {echo $v['content']; echo "</br>";};  
//	 if( isset($v['bg_color'])) {echo $v['bg_color']; echo "</br>";};  
//	 if( isset($v['txt_color'])) {echo $v['txt_color']; echo "</br>";};  
//	 if( isset($v['slug'])) {echo $v['slug']; echo "</br>";};  
//	 if( isset($v['story_description']) ){echo $v['story_description']; echo "</br>";};  
//     if( isset($v['book_name'])) { echo $v['book_name']; echo "</br>";};  
//	 if( isset($v['chapter_name'])) {echo $v['chapter_name']; echo "</br>";};  
//	 if( isset($v['verse_number']) ){echo $v['verse_number']; echo "</br>";};  
//	 if( isset($v['image'])) {echo $v['image']; echo "</br>";};   	
//}
	  
	
    echo "</br>";
//    echo    "<a href=".home_url()."/". $acf['title'].">". $acf['title'] . "</a>"; 
  //        echo "</br>";
   // echo $acf['devocioni']; 

}    
//function readmore() {
 //   wp_enqueue_script( 'readmore-js', plugins_url( '/readmore.js', __FILE__ ));
  //    wp_enqueue_style( 'readmore-css',   plugins_url( '/readmore1.css', __FILE__ ));
//}
 
//add_action( 'wp_footer', 'readmore' );   

  
	// register shortcode
add_shortcode('start', 'start'); 

