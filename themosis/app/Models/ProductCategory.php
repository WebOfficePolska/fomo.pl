<?php

namespace App\Models;


/**
 * Class ProductCategory.
 *
 * @package Theme\Models
 */
class ProductCategory extends BaseTaxonomy 
{

	protected static $taxonomy = 'product-category';
	protected static $custom_fields = ['category_photo', 'category_title', 'category_content'];

}
