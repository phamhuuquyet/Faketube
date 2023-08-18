<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\CategoryStoreRequest;
use App\Models\Category;
use \Str;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        $abc = [];
        
        return view('categories.index', compact('categories', 'abc'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(CategoryStoreRequest $request)
    {
        $category = $request->only('name', 'description', 'img', 'status');
        $category['slug'] = Str::slug($category['name']);
        $category['created_at'] =  now();
        $category['updated_at'] =  now();
        // $category['name'] =  $request->name1;
        // dd($category);

        Category::create($category);

        return redirect()->route('admin.category.index');

    }
}
