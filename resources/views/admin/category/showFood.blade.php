@extends('layouts.app')

@section('title', 'Show Categories')

@section('content')
        <div class="container-fluid">
            <h1 class="text-center mt-3">All Desserts</h1>
            <p class="text-end p-0 me-3"><a href="{{ route('categories.createFood') }}" class="btn btn-success">Add Food</a></p>
            <x-table title="Desserts">
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
