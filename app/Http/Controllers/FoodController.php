<?php

namespace App\Http\Controllers;

use App\Http\Requests\FoodRequest;
use App\Models\Category;
use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.food.add', compact('categories'));
    }

    public function store(FoodRequest $request, Food $food)
    {
        $food->create($request->validated());
        return to_route('food.show');
    }

    public function show()
    {
        $foods = Food::all();
        $categories = Category::all();
        return view('admin.food.show', compact('foods', 'categories'));
    }

    public function edit(Food $food)
    {
        $categories = Category::all();
        return view('admin.food.edit', compact('food', 'categories'));
    }

    public function update(FoodRequest $request, Food $food)
    {
        $food->update($request->validated());
        return to_route('food.show');
    }

    public function destroy(Food $food)
    {
        $food->delete();
        return to_route('food.show');
    }

    public function showDetails(Food $food)
    {
        return view('admin.food.showDetails', compact('food'));
    }

}
