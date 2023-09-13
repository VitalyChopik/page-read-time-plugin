<?php
	
/**
 * Plugin Name: Page Read Time
 * Description: The plugin is designed to automatically add the time it will take the user to read the post
 * Author URI:  Ссылка на автора
 * Author:      https://github.com/VitalyChopik/
 *
 * Requires PHP: 5.4
 * Requires at least: 2.5
 * 
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 *
 * Version:     1.1
 */

 function reading_time() {
  $content = get_post_field('post_content', get_the_ID());
  $word_count = str_word_count(strip_tags($content));
  $reading_time = ceil($word_count / 200); // Средняя скорость чтения 200 слов в минуту

  return $reading_time;
}

function read_time_shortcode() {
  ob_start();
  $reading_time = reading_time();
  echo '<span class="reading-time">' . $reading_time . ' минут(ы)</span>';
  return ob_get_clean();
}

add_shortcode('reading_time', 'read_time_shortcode');
