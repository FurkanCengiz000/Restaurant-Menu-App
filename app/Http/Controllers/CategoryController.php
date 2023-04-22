<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Http\Requests\FoodRequest;
use App\Models\Category;
use App\Models\Food;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function create()
    {
        return view('admin.category.add');
    }
    
    public function store(CategoryRequest $request)
    {
        Category::create($request->validated());
        return to_route('categories.show');
    }
    
    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }
    
    public function update(CategoryRequest $request, Category $category)
    {
        $category->update($request->validated());
        return to_route('categories.show');
    }
    
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.show', compact('categories'));
    }

    public function show(Category $category)
    {
        return view('admin.category.showDetails', compact('category'));
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return to_route('categories.show');
    }
    
    public function showFood(Category $category)
    {
        return view('admin.category.showFood', compact('category'));
    }
    
}
