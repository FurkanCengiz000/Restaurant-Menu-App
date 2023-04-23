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

        $file = $request->file('image');
        $path = $file->store('images', 'uploads');
        $path = "storage/" . $path;
        $validated_data = $request->validated();
        $validated_data['image'] = $path;
        $food->create($validated_data);
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

    public function update(Request $request, Food $food)
    {
        $validated = [
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'category_id' => 'string|max:255',
            'is_active' => 'required|string'
        ];
        
        $validated_data = $request->validate($validated);
        if ($request->hasFile('image'))
        {
            unlink(public_path($food->image));
            $file = $request->file('image');
            $path = $file->store('images', 'uploads');
            $path = "storage/" . $path;
            $validated_data = $request->validate($validated);
            $validated_data['image'] = $path;
        }
        $food->update($validated_data);
        return to_route('food.show');
    }

    public function destroy(Food $food)
    {
        unlink(public_path($food->image));
        $food->delete();
        return to_route('food.show');
    }

    public function showDetails(Food $food)
    {
        return view('admin.food.showDetails', compact('food'));
    }

    public function checkboxUpdate(Food $food)
    {
        if($food->is_active == 0)
        {
            $food->update(['is_active' => 1]);
        }
        else
        {
            $food->update(['is_active' => 0]);
        }

        return redirect()->back();
    }

}
