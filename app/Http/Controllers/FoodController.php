<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('admin.food.add');
    }

    public function store()
    {

    }

    public function show()
    {
        return view('admin.food.show');
    }

    public function edit()
    {
        return view('admin.food.edit');
    }

    public function destroy()
    {
        
    }

    public function showDetails()
    {
        return view('admin.food.showDetails');
    }

}
