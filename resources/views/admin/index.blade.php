@extends('layouts.app')

@section('title', 'Admin Panel')

@section('content')
    <div class="container-fluid">

        <div class="my-auto">
            <div class="row">
                <a href="{{ route('category.add') }}" class="col-6 button"><h1 >Add Category</h1></a>
                <a href="{{ route('categories.show') }}" class="col-6 button"><h1>Show All Categories</h1></a>
            </div>
            <div class="row">
                <a href="{{ route('food.add') }}" class="col-6 button"><h1>Add Food</h1></a>
                <a href="{{ route('food.show') }}" class="col-6 button"><h1>Show All Foods</h1></a>
            </div>
        </div>

    </div>
@endsection