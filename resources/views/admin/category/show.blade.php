@extends('layouts.app')

@section('title', 'Show Categories')

@section('content')
    <div class="container-fluid">
        <h1 class="text-center mt-3">All Categories</h1>
        <p class="text-end p-0 m-0 me-3 mt-3"><a href="{{ route('category.add') }}" class="btn btn-success">Add Category</a>
        </p>
        <x-table title="Categories">
            @foreach ($categories as $category)
                <x-table.tr name="{{ $category->name }}" is_active="{{ $category->is_active }}"
                    checkbox_url="{{ route('category.checkboxUpdate', $category->id) }}">
                    <x-button type="info" icon="eye" url="{{ route('category.showDetails', $category->id) }}" />
                    <x-button type="success" icon="utensils" url="{{ route('categories.showFood', $category->id) }}" />
                    <x-button type="warning" icon="pen-to-square" url="{{ route('categories.edit', $category->id) }}" />
                    <x-button.destroy url="{{ route('categories.destroy', $category->id) }}" />
                </x-table.tr>
            @endforeach
        </x-table>

        @if (count($categories) <= 0)
            <div class="alert alert-warning" role="alert">
                There is no category. You should <a href="{{ route('category.add') }}" class="alert-link">add some</a>
                category !!!
            </div>
        @endif
    </div>
@endsection
