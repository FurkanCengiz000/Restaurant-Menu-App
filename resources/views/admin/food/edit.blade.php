@extends('layouts.app')

@section('title', 'Update Food')

@section('content')
    <div class="d-flex justify-content-center">
        <x-form action="{{ route('food.update', $food->id) }}" method="PUT" class="bg-white p-5 shadow-lg rounded" file="yes">
            <div class="row mb-3">
                <h3 class="text-center">Update Food</h3>
            </div>
            <div class="row mb-3">
                <label for="name" class="form-label fs-5">Name</label>
                <input class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $food->name) }}" name="name" placeholder="Update Name"
                    type="text">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            
            </div>
            
            <div class="row mb-3">
                <label for="description" class="form-label fs-5">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" placeholder="Update Description"
                    name="description" cols="30" rows="5">{{ old('description', $food->description) }}</textarea>
                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <div class="row mb-3">
                <label for="price" class="form-label fs-5">Price</label>
                <input class="form-control @error('price') is-invalid @enderror" value="{{ old('price', $food->price) }}" name="price"
                    placeholder="Update Price" type="text">
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
                    <option value="">Select Menu</option>
                    @foreach ($categories as $category)
                        <option @if($food->category->id == $category->id) selected @endif value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <div class="row mb-3">
                <label for="name" class="form-label fs-5">Status</label>
                <input type="hidden" value="0" name="is_active">
                <input type="checkbox" @if($food->is_active == 1) checked @endif class="btn-check" value="1" name="is_active" id="btncheck1" autocomplete="off">
                <label class="btn btn-outline-primary w-25" for="btncheck1">Active</label>
            </div>
            
            <div class="row mb-3">
                <button class="btn btn-lg btn-success" type="submit">Update</button>
            </div>
        </x-form>
    </div>
@endsection
