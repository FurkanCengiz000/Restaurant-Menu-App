@extends('layouts.app')

@section('title', 'Food Details')

@section('content')

    <x-show_details name="Food" id="{{ $food->id }}">
        <x-show_details.row name="Name">
            {{ $food->name }}
        </x-show_details.row>

        <x-show_details.row name="Description">
            {{ $food->description }}
        </x-show_details.row>

        <x-show_details.row name="Price">
            {{ $food->price }} $
        </x-show_details.row>

        <x-show_details.row name="Image">
            <img src="{{ asset($food->image) }}" width="100" alt="Uploaded image">
            
        </x-show_details.row>

        <x-show_details.row name="Category">
            {{ $food->category->name }}
        </x-show_details.row>

        <x-show_details.row name="Food Category Status">
            @if($food->category->is_active == 1) Active @else Not Active @endif
        </x-show_details.row>

        <x-show_details.row name="Food Status">
            @if($food->is_active == 1) Active @else Not Active @endif
        </x-show_details.row>
        
    </x-showDetails>

    @endsection
