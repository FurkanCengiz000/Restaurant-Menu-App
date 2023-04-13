<?php

namespace App\Http\Controllers;

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
    
    public function store()
    {

    }
    
    public function edit()
    {
        return view('admin.category.edit');
    }
    
    public function update()
    {

    }
    
    public function show()
    {
        return view('admin.category.show');
    }

    public function showDetails()
    {
        return view('admin.category.showDetails');
    }

    public function destroy()
    {

    }
    
    public function showFood()
    {
        return view('admin.category.showFood');
    }
    
    public function createFood()
    {
        return view('admin.category.addFood');
    }
    
    public function storeFood()
    {

    }
}
