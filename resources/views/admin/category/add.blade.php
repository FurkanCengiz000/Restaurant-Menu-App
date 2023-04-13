@extends('layouts.app')

@section('title', 'Add Category')

@section('content')
    <div class="d-flex justify-content-center align-items-center" style="height: 80vh">
        <x-form action="" class="bg-white p-5 shadow-lg rounded">
            <x-form.category />
        </x-form>
    </div>
@endsection
