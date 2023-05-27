<?php
	
/**
 * Plugin Name: Page Read Time
 * Description: The plugin is designed to automatically add the time it will take the user to read the post
//  * Plugin URI:  Ссылка на инфо о плагине
 * Author URI:  Ссылка на автора
 * Author:      https://github.com/VitalyChopik/
 *
 * Requires PHP: 5.4
 * Requires at least: 2.5
 * 
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 *
 * Version:     1.0
 */

function reading_time() {
  $content = get_post_field( 'post_content', $post->ID );
  $word_count = str_word_count( strip_tags( $content ) );
  $readingtime = ceil($word_count / 200);
  $totalreadingtime = $readingtime;
  return $totalreadingtime;
}