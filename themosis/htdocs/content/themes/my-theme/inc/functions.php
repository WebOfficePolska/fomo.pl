<?php

if (class_exists( 'iworks_orphan')) {
	function orphan_replace($text) {		
	    static $orphan = null;
	    if (is_null($orphan)) {
	    	$orphan = new iworks_orphan();
	    }
	    return $orphan->replace($text);
	}
}

if (!function_exists('thumbnail_url')) {

	function thumbnail_url($id, $size = null, $icon = false) {
		$data = wp_get_attachment_image_src(get_post_thumbnail_id($id), $size, $icon);
		return (empty($data)) ? null : $data[0];
	}

}


if (!function_exists('debug')) {

	function debug($data, $exit = true) {
		if (defined('WP_DEBUG') && WP_DEBUG === true) {
			echo "<pre>dump \n---------------------- \n\n";
			if (is_array($data))
				echo print_r($data, true);
			else
				var_dump($data);
			echo "\n----------------------</pre>";
			return $exit ? die('{THE END}') : null;
		}
	}
	
}

if (!function_exists('text_truncate')) {

	function text_truncate($string, $limit, $break = '.', $pad = '...')
	{
		$string = strip_tags($string);
		if(strlen($string) <= $limit) return $string;
		if(false !== ($breakpoint = strpos($string, $break, $limit))) {
			if($breakpoint < strlen($string) - 1) {
				$string = substr($string, 0, $breakpoint) . $pad;
			}
		}

		return $string;
	}

}

if (!function_exists('include_svg')) {

	function include_svg($file) 
	{
		return file_get_contents(get_template_directory() . "/assets/svg/{$file}");
	}
}


