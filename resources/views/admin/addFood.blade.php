@extends('layouts.app')
@section('title', 'Add Food')
@section('content')

    <div class="d-flex justify-content-center">
        <form action="" class="bg-white p-5 shadow-lg rounded">
            <div class="row mb-3">
                <h3 class="text-center">Add Food</h3>
            </div>
            <div class="row mb-3">
                <label for="name" class="form-label fs-5">Name</label>
                <input class="form-control" placeholder="Add Name" type="text">
            </div>

            <div class="row mb-3">
                <label for="name" class="form-label fs-5">Description</label>
                <textarea class="form-control" placeholder="Add Description" name="" id="" cols="30"
                    rows="5"></textarea>
            </div>

            <div class="row mb-3">
                <label for="name" class="form-label fs-5">Price</label>
                <input class="form-control" placeholder="Add Price" type="text">
            </div>

            <div class="row mb-3">
                <label for="image" class="form-label fs-5">Image</label>
                <input class="form-control" type="file" id="formFile">
            </div>

            <div class="row mb-3">
                <label for="name" class="form-label fs-5">Select Menu</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Select Menu</option>
                    <option value="1">Desserts</option>
                    <option value="2">Hot Drinks</option>
                    <option value="3">Cold Drinks</option>
                </select>
            </div>

            <div class="row mb-3">
                <label for="name" class="form-label fs-5">Status</label>
                <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                <label class="btn btn-outline-primary w-25" for="btncheck1">Active</label>
            </div>

            <div class="row mb-3">
                <button class="btn btn-lg btn-success" type="submit">Add</button>
            </div>

        </form>
    </div>

@endsection
