<?php

namespace App\Models;


/**
 * Class BaseTaxonomy.
 *
 * @package Theme\Models
 */
class BaseTaxonomy 
{

	protected static $taxonomy = 'category';
	protected static $custom_fields = [];

	public static function getCustomFields(&$term) 
	{
		if ($term) {

            $term->url = get_term_link($term, static::$taxonomy);
            foreach (static::$custom_fields as $field) {
                $term->$field = get_field($field, static::$taxonomy . "_{$term->term_id}");
            }

		}

		return $term;
	}

	public static function all($options = [])
	{
		$options['taxonomy'] = static::$taxonomy;
		if (!isset($options['hide_empty'])) {
			$options['hide_empty'] = false;
		}

		$terms = get_terms($options);

		
		foreach ($terms as &$t) {
			static::getCustomFields($t);
		}

		return $terms;
	}

	public static function tree($parent = 0)
	{

		$terms = get_terms([
		    'taxonomy' => static::$taxonomy,
		    'hide_empty' => false,
		    'parent' => $parent
		]);

		foreach ($terms as &$t) {
			static::getCustomFields($term);
			$t->children = static::tree($t->term_id);
		}

		return $terms;
	}
}
