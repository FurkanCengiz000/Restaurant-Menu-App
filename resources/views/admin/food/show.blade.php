@extends('layouts.app')

@section('title', 'Show All Foods')

@section('content')
    <div class="container-fluid">

        <h1 class="text-center mt-3">All Foods</h1>

        <div class="d-flex justify-content-end">

            <div>
                <p class="text-end p-0 m-0 me-3"><a href="{{ route('food.add') }}" class="btn btn-success">Add Food</a></p>
            </div>

            <div class="ms-3">
                <form action="" method="GET" role="search">
                    <div class="input-group">
                        <input type="text" name="s" class="form-control" placeholder="Search Food"
                            aria-label="Search Food" aria-describedby="search-button">
                        <button class="btn btn-outline-secondary" type="button" id="search-button"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
                        @if (request()->query('s'))
                            <button class="btn btn-outline-secondary"><i class="fa fa-refresh"></i></button>
                        @endif
                    </div>
                </form>
            </div>
        </div>

        <x-table title="Foods">
            @foreach ($foods as $food)
                <x-table.tr name="{{ $food->name }}" category_is_active="{{ $food->category->is_active }}"
                    is_active="{{ $food->is_active }}" checkbox_url="{{ route('food.checkboxUpdate', $food->id) }}">
                    <x-button type="info" icon="eye" url="{{ route('food.showDetails', $food->id) }}" />
                    <x-button type="warning" icon="pen-to-square" url="{{ route('food.edit', $food->id) }}" />
                    <x-button.destroy url="{{ route('food.destroy', $food->id) }}" />
                </x-table.tr>
            @endforeach
        </x-table>
        {{ $foods->appends(['s' => request()->query('s')])->links() }}
    </div>
@endsection
