@extends('layouts.app')

@section('title', 'Show Categories')

@section('content')
    <div class="container-fluid">
        <h1 class="text-center mt-3">All {{ $category->name }}</h1>
        <p class="text-end p-0 me-3"><a href="{{ route('categories.createFood', $category->id) }}" class="btn btn-success">Add {{ $category->name }}</a></p>
        @if (count($category->foods) > 0)
            <x-table title="{{ $category->name }}">
                @foreach ($category->foods as $food)
                    <x-table.tr name="{{ $food->name }}">
                        <x-button type="info" icon="eye" url="{{ route('food.showDetails', $food->id) }}" />
                        <x-button type="warning" icon="pen-to-square" url="{{ route('food.edit', $food->id) }}" />
                        <x-button.destroy type="danger" icon="trash" url="{{ route('food.destroy', $food->id) }}" />
                    </x-table.tr>
                @endforeach
            </x-table>
        @else
            <div class="alert alert-danger" role="alert">
                There is no {{ $category->name }}. You should <a href="{{ route('categories.createFood', $category->id) }}" class="alert-link">add some {{ $category->name }}</a>  !!!
            </div>
        @endif
    </div>
@endsection
