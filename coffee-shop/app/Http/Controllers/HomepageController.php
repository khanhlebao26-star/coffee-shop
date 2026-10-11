<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $categories = Category::query()
            ->with('products')
            ->whereHas('products')
            ->get();

        return view('homepage', [
            'categories' => $categories,
        ]);
    }
}
