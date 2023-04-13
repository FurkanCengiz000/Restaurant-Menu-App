@extends('layouts.app')

@section('title', 'Food Details')

@section('content')

    <x-show_details name="Food">
        <x-show_details.row name="Name">
            Brownie
        </x-show_details.row>

        <x-show_details.row name="Description">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel id temporibus iste repudiandae fugit, modi ea quam
            necessitatibus rerum praesentium.
        </x-show_details.row>

        <x-show_details.row name="Price">
            25 $
        </x-show_details.row>

        <x-show_details.row name="Category">
            Desserts
        </x-show_details.row>

        <x-show_details.row name="Status">
            Active
        </x-show_details.row>
        
    </x-showDetails>

    @endsection
