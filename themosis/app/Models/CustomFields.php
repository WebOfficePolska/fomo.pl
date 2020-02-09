<?php

namespace App\Models;

trait CustomFields {

    public static function getCustomFields($post, $thumb_size = 'thumbnail') {

        if ($post) {
            foreach (static::$custom_fields as $field) {
                $post->$field = get_field($field, $post->ID);
            }
            if (is_array($thumb_size)) {
                $post->images = [];
                foreach ($thumb_size as $size) {
                    $post->images[$size] = thumbnail_url($post->ID, $size);
                }
                $post->thumb = $post->images[$thumb_size[0]];
            } else {
                $post->thumb = thumbnail_url($post->ID, $thumb_size);
            }

            if (isset($post->custom_url) && !empty($post->custom_url)) {
                $post->url = $post->custom_url;
            } else {
                $post->url = get_the_permalink($post->ID);
            }
            
            $post->udate = strtotime($post->post_date);

            if (!empty(static::$taxonomy)) {
            	$post->terms = [];
                if (is_array(static::$taxonomy)) {
                    foreach (static::$taxonomy as $tax) {
                        $tax_slug = str_replace('-', '_', $tax);
                        $post->terms[$tax] = $post->terms[$tax_slug] = wp_get_post_terms($post->ID, $tax);
                    }                    
                } else {
                    $tax_slug = str_replace('-', '_', static::$taxonomy);
                    $post->terms[static::$taxonomy] = $post->terms[$tax_slug] = wp_get_post_terms($post->ID, static::$taxonomy);
                }
            	
            }
        }
        return $post;
    }

}