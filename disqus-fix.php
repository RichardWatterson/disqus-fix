<?php
/**
 * Plugin Name: Disqus Fix
 * Version: 1.1
 * Plugin URI: http://farowp.com/
 * Description: Este plugin resulve los problemas de los comentarios en modo vista previa para algunos temas como NewsPaper y NewsMag.
 * Author: Richard Watterson
 * Author URI: https://farowp.com/
 * Requires at least: 5.0
 * Tested up to: 5.6.2
 *
 * Text Domain: disqus-fix
 * Domain Path: /
 *
 * @package WordPress
 * @author Richard Watterson
 * @since 1.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_filter( 'comments_template', function ( $template) {	
	if (is_preview() || !is_file($template)){
		return;
	}
	return $template;
},999);
