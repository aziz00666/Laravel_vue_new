<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Product;
use App\Models\User;
use http\Env\Request;

class CommentController extends Controller
{
    public function index(Request $request, Product $product)
    {
          $comment
            $product->comments()->save
    }
}
