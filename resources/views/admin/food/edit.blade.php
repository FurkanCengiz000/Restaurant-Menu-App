@extends('layouts.app')

@section('title', 'Update Food')

@section('content')
    <div class="d-flex justify-content-center">
        <x-form action="" method="PUT" class="bg-white p-5 shadow-lg rounded">
            <x-form.food proses="Update" />
        </x-form>
    </div>
@endsection
