@extends('layouts.app')

@section('title', 'Category Details')

@section('content')
    
    <x-show_details id="{{ $category->id }}">
        <x-show_details.row name="Name" >
            {{$category->name}}
        </x-show_details.row>
        <x-show_details.row name="Status" >
            @if($category->is_active == 1) Active @else Not Active @endif
        </x-show_details.row>
    </x-show_details>

@endsection
