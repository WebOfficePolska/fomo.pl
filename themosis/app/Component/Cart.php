<?php

namespace App\Component;

use App\Models\Product;


class Cart
{

	private static $products = [];

	public static function add($product_id)
	{

        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }


        if (!isset($_SESSION['cart'][$product_id])) {
            $_SESSION['cart'][$product_id] = 0;
            self::$products[$product_id] = Product::one($product_id);
        }

        $_SESSION['cart'][$product_id]++;


	}


	public static function remove($product_id)
	{
		if ($_SESSION['cart'][$product_id] === 1) {
			self::delete($product_id);	
		} else {
			$_SESSION['cart'][$product_id]--;
		}
	}


	public static function delete($product_id)
	{
		unset($_SESSION['cart'][$product_id]);
		unset(self::$products[$product_id]);
	}


	public static function clear()
	{
		unset($_SESSION['cart']);
	}


	public static function products()
	{
		if (isset($_SESSION['cart'])) {
		    foreach ($_SESSION['cart'] as $product_id => $item) {
		    	if (!isset(self::$products[$product_id])) {
					self::$products[$product_id] = Product::one($product_id);
		    	}		        
		    }
		}
		return self::$products;
	}

	public static function total()
	{
		$total = 0;
		if (isset($_SESSION['cart'])) {
			$cart = $_SESSION['cart'];
			$base_price = floatval(get_field('base_price', 'option'));

			$total = array_reduce(self::products(), function($carry, $item) use ($cart, $base_price) {
				$price = $item->price ? : $base_price;
				return $carry + $price * $cart[$item->ID];
			}, 0);
		}
		return $total;
	}

	public static function delivery()
	{
		$cost = 0;



		return $cost;
	}

	public static function get()
	{

		if (!isset($_SESSION['cart'])) {
			$_SESSION['cart'] = [];
		}

		return [
			'cart' => $_SESSION['cart'],
			'products' => self::products(),
			'total' => self::total(),
			'delivery_cost' => self::delivery()
		];
	}

}