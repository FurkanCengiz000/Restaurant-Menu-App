@extends('layouts.app')

@section('title', 'Show Categories')

@section('content')
    <div class="container-fluid">
        <h1 class="text-center mt-3">All Categories</h1>
        <x-table title="Categories">
            <x-table.tr name="Desserts">
                <x-button type="info" icon="eye" url="{{ route('category.showDetails') }}" />
                <x-button type="success" icon="utensils" url="{{ route('categories.showFood') }}" />
                <x-button type="warning" icon="pen-to-square" url="{{ route('categories.edit') }}" />
                <x-button type="danger" icon="trash" url="" />
            </x-table.tr>
            
            <x-table.tr name="Cold Drinks">
                <x-button type="info" icon="eye" url="{{ route('category.showDetails') }}" />
                <x-button type="success" icon="utensils" url="{{ route('categories.showFood') }}" />
                <x-button type="warning" icon="pen-to-square" url="{{ route('categories.edit') }}" />
                <x-button type="danger" icon="trash" url="" />
            </x-table.tr>

            <x-table.tr name="Hot Drinks">
                <x-button type="info" icon="eye" url="{{ route('category.showDetails') }}" />
                <x-button type="success" icon="utensils" url="{{ route('categories.showFood') }}" />
                <x-button type="warning" icon="pen-to-square" url="{{ route('categories.edit') }}" />
                <x-button type="danger" icon="trash" url="" />
            </x-table.tr>
        </x-table>
    </div>
@endsection
