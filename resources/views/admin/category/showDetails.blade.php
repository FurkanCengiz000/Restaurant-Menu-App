@extends('layouts.app')

@section('title', 'Category Details')

@section('content')
    
    <x-show_details>
        <x-show_details.row name="Name" >
            Desserts
        </x-show_details.row>
        <x-show_details.row name="Status" >
            Active
        </x-show_details.row>
    </x-show_details>

@endsection
