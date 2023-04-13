@extends('layouts.app')

@section('title', 'Show All Foods')

@section('content')
    <div class="container-fluid">

        <h1 class="text-center mt-3">All Foods</h1>

        <div class="d-flex justify-content-end">
            
            <div>
                <select class="form-select" name="company_id">
                    <option value="" selected="">All Categories</option>
                    <option value="">Desserts</option>
                    <option value="">Hot Drinks</option>
                    <option value="">Cold Drinks</option>
                </select>
            </div>
            
            <div class="ms-3">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search Food" aria-label="Search Food"
                        aria-describedby="search-button">
                    <button class="btn btn-outline-secondary" type="button" id="search-button"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </div>
        </div>

        <x-table title="Foods">
            <x-table.tr name="Brownie">
                <x-button type="info" icon="eye" url="{{ route('food.showDetails') }}" />
                <x-button type="warning" icon="pen-to-square" url="{{ route('food.edit') }}" />
                <x-button type="danger" icon="trash" url="" />
            </x-table.tr>
            <x-table.tr name="Cheese Cake">
                <x-button type="info" icon="eye" url="{{ route('food.showDetails') }}" />
                <x-button type="warning" icon="pen-to-square" url="{{ route('food.edit') }}" />
                <x-button type="danger" icon="trash" url="" />
            </x-table.tr>
            <x-table.tr name="Cake">
                <x-button type="info" icon="eye" url="{{ route('food.showDetails') }}" />
                <x-button type="warning" icon="pen-to-square" url="{{ route('food.edit') }}" />
                <x-button type="danger" icon="trash" url="" />
            </x-table.tr>
        </x-table>
    </div>
@endsection
