@extends('layouts.app')

@section('title', 'Dessert | Add Food')

@section('content')
    <div class="d-flex justify-content-center">
        <x-form action="" class="bg-white p-5 shadow-lg rounded">
            <x-form.food related="yes" />
        </x-form>
    </div>
@endsection
