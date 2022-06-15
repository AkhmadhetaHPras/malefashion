<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $title = 'Shop';
        $products = Product::paginate(9);

        $categories = Category::all();
        $brands = Brand::all();

        return view('shop', compact('title', 'products', 'categories', 'brands'));
    }

    public function show($slug)
    {
        $title = 'Shop';

        // reviews and size
        $p = Product::where('slug', $slug)->with('review', 'variant')->first();
        $relatedproduct = Category::find($p->category_id);

        return view('shop-detail', compact('title', 'p', 'relatedproduct'));
    }

    public function brandfilter(Brand $brand)
    {
        $title = 'Shop';
        $products = Product::where('brand_id', $brand->id)->paginate(9);

        // return dd($products);
        $categories = Category::all();
        $brands = Brand::all();

        return view('shop', compact('title', 'products', 'categories', 'brands'));
    }

    public function categoryfilter(Category $category)
    {
        $title = 'Shop';
        $products = Product::where('category_id', $category->id)->paginate(9);

        // return dd($products);
        $categories = Category::all();
        $brands = Brand::all();

        return view('shop', compact('title', 'products', 'categories', 'brands'));
    }
}
