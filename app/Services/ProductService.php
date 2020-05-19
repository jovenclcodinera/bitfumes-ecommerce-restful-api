<?php


namespace App\Services;


use App\Exceptions\ProductDoesNotBelongToUserException;

class ProductService
{
    public function checkProductUser($product)
    {
        if (auth()->id() != $product->user_id) {
            throw new ProductDoesNotBelongToUserException();
        }
    }
}
