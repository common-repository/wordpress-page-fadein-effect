<?php
/*
Plugin Name: Jquery Page FadeIn Effect
Plugin URI: http://swaind.com/wppagefadein
Description: Jquery Page FadeIn Effect for Wordpress allows pages to fadein smoothly. It works extra fine with large pages. 
Version: 1.1.1
Author: Swaind
Author URI: http://blogs.swaind.com/

Copyright 2011 Chris . (email : chris.chenxt@swaind.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */


//Define the plugin directory and url for file access.
$jclockuploads = wp_upload_dir();
define( 'jqpagefadein_INSERTJS',  plugin_dir_url( __FILE__ ) . 'js/'  );
define( 'jqpagefadein_INSERTCSS', plugin_dir_url( __FILE__ ) . 'css/' );

//include javacript and css into header
wp_enqueue_script( 'jquery' );

//Fadein Effect should be activated after this code.
add_action( 'wp_head', 'jqpfadein_addHeaderCode',30);
function jqpfadein_addHeaderCode() {
	echo '
	<script type="text/javascript">     
	jQuery(document).ready(function() {             
	jQuery("body").css("display", "none");             
	jQuery("body").fadeIn(3000);     }); 
	</script> ';
}

?>