@extends('layouts.app')

@section('title', 'Add Food')

@section('content')
    <div class="d-flex justify-content-center">
        <x-form action="{{ route('food.store') }}" class="bg-white p-5 shadow-lg rounded" file='yes'>
            <div class="row mb-3">
                <h3 class="text-center">Add Food</h3>
            </div>
            <div class="row mb-3">
                <label for="name" class="form-label fs-5">Name</label>
                <input class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Add Name"
                    type="text">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            
            </div>
            
            <div class="row mb-3">
                <label for="description" class="form-label fs-5">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" placeholder="Add Description"
                    name="description" cols="30" rows="5"></textarea>
                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <div class="row mb-3">
                <label for="price" class="form-label fs-5">Price</label>
                <input class="form-control @error('price') is-invalid @enderror" name="price"
                    placeholder="Add Price" type="text">
                @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <div class="row mb-3">
                <label for="image" class="form-label fs-5">Image</label>
                <input class="form-control @error('image') is-invalid @enderror" name="image" type="file" id="formFile">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <div class="row mb-3">
                <label for="category_id" class="form-label fs-5">Select Menu</label>
                <select name="category_id" class="form-select @error('category_id') is-invalid @enderror" aria-label="Default select example">
                    <option selected value="">Select Menu</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <div class="row mb-3">
                <label for="name" class="form-label fs-5">Status</label>
                <input type="hidden" value="0" name="is_active">
                <input type="checkbox" class="btn-check" value="1" name="is_active" id="btncheck1" autocomplete="off">
                <label class="btn btn-outline-primary w-25" for="btncheck1">Active</label>
            </div>
            
            <div class="row mb-3">
                <button class="btn btn-lg btn-success" type="submit">Add</button>
            </div>

        </x-form>
    </div>
@endsection
