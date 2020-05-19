<?php

namespace App\Exceptions;

use Exception;

class ProductDoesNotBelongToUserException extends Exception
{
    public function render()
    {
        return ['error'=>'Product does not belongs to User'];
    }
}
