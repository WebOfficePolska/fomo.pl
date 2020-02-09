<?php

namespace App\Models;

use WP_Query;

/**
 * Class BaseArticle.
 * Help you retrieve data from your posts table.
 *
 * @package Theme\Models
 */
class Product 
{

	use CustomFields;

	protected static $custom_fields = ['name', 'number', 'type', 'photos', 'price', 'delivery_time', 'product_sheet', 'category_photo'];
    protected static $post_type = 'product';
    protected static $taxonomy = 'product-category';
    protected static $thumb_size = 'full';

    protected static $orderby = 'menu_order';
    protected static $order = 'ASC';


    /**
     * Return one product
     *
     * @return array
     */
    public static function one($id)
    {
        if (($product = get_post($id))) {
            $product = static::getCustomFields($product);
        }
        
        return $product;
    }

    /**
     * Return a list of all  products.
     *
     * @return array
     */
    public static function all($max = -1, $thumb_size = 'thumbnail', $wp_query = null)
    {

        $criteria = [
            'post_type'         => static::$post_type,
            'posts_per_page'    => $max,
            'post_status'       => 'publish',
            'orderby'           => static::$orderby,
            'order'             => static::$order,
        ];

        $query = new WP_Query($criteria);

        $posts = $query->get_posts();

        foreach ($posts as &$post) {
            $post = static::getCustomFields($post,  $thumb_size);
        }

        return $posts;
    }

    /**
     * Return a list of all  products by taxonomy term.
     *
     * @return array
     */    
    public static function getByTaxonomy($term, $taxonomy, $posts_per_page = -1, $offset = 0, $thumb_size = 'medium', $exclude = false) 
    {

        $params = [
            'tax_query'         => [
                [
                    'taxonomy' => $taxonomy,
                    'field'    => 'slug',
                    'terms'    => $term,
                ],
            ],
            'post_type'         => static::$post_type,
            'posts_per_page'    => $posts_per_page,
            'offset'            => $offset,
            'post_status'       => 'publish',
            'orderby'           => static::$orderby,
            'order'             => static::$order,
        ];

        if ($exclude) {
            $params['post__not_in'] = $exclude;
        }

        $query = new WP_Query($params);

        $posts = $query->get_posts();

        foreach ($posts as &$post) {
            $post = static::getCustomFields($post,  $thumb_size);
            $post->udate = strtotime($post->post_date);
        }

        return $posts;
    }



    /**
     * Return a list of all  products by taxonomy term.
     *
     * @return array
     */    
    public static function getByMeta($key, $value, $compare = '=', $posts_per_page = -1, $offset = 0, $thumb_size = 'medium') 
    {

        $params = [
            'meta_query'         => [
                [
                    'key'      => $key,
                    'value'    => $value,
                    'compare'  => $compare,
                ],
            ],
            'post_type'         => static::$post_type,
            'posts_per_page'    => $posts_per_page,
            'offset'            => $offset,
            'post_status'       => 'publish',
            'orderby'           => static::$orderby,
            'order'             => static::$order,
        ];

        $query = new WP_Query($params);

        $posts = $query->get_posts();

        foreach ($posts as &$post) {
            $post = static::getCustomFields($post,  $thumb_size);
            $post->udate = strtotime($post->post_date);
        }

        return $posts;
    }    


}
