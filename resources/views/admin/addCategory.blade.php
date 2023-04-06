@extends('layouts.app')
@section('title', 'Add Menu')
@section('content')
    
    <div class="d-flex justify-content-center align-items-center" style="height: 80vh">
        <form action="" class="bg-white p-5 shadow-lg rounded">
            <h3 class="text-center mb-4">Add Menu</h3>
            <div class="d-flex justify-content-center mb-3 ">
                {{-- <label class="me-3 fs-4" for="name">Name:</label> --}}
                <div class="input-group mb-3">
                    <input type="text" placeholder="Add Menu" class="form-control">
                    <button class="btn btn-outline-success" type="button">Add</button>
                  </div>
            </div>
        </form>
    </div>

@endsection