@extends('layouts.app')

@section('title', 'Update Category')

@section('content')
    <div class="d-flex justify-content-center align-items-center" style="height: 80vh">
        <x-form action="{{ route('categories.update', $category->id) }}" method="PUT" class="bg-white p-5 shadow-lg rounded">
            <x-form.category  value="{{ $category->name }}" proses="Update" />
        </x-form>
    </div>
@endsection
