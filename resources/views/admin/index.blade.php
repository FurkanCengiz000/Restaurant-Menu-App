@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 mt-5">
                <ul class="list-group">
                    <li><a href="#" class="list-group-item list-group-item-action fs-5">Add Menu <i
                                class="fa-solid fa-plus fs-5 ms-2 text-success"></i></a></li>
                    <li><a href="#" class="list-group-item list-group-item-action list-group-item-info">Desserts</a>
                    </li>
                    <li><a href="#" class="list-group-item list-group-item-action list-group-item-info">Hot Drinks</a>
                    </li>
                    <li><a href="#" class="list-group-item list-group-item-action list-group-item-info">Cold
                            Drinks</a></li>
                </ul>
            </div>
            <div class="col-10">
                <h1 class="text-center">Desserts</h1>

                <div class="row mb-3">
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                        aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a
                                    class="text-decoration-none text-muted" href="">Add Food</a></li>
                        </ol>
                    </nav>
                </div>

                <div class="row">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search something"
                            aria-label="Search something" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
                    </div>
                </div>

                <div class="row">
                    <div class="contanier-fluid">
                        <table class=" table table-striped table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>Status</th>
                                    <th>Food</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>Brownie</td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-danger"><i
                                                class="fa fa-trash text-white"></i></a>
                                        <a href="" class="btn btn-sm btn-warning"><i
                                                class="fa-solid fa-pen-to-square text-dark"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>Brownie</td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-danger"><i
                                                class="fa fa-trash text-white"></i></a>
                                        <a href="" class="btn btn-sm btn-warning"><i
                                                class="fa-solid fa-pen-to-square text-dark"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>Brownie</td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-danger"><i
                                                class="fa fa-trash text-white"></i></a>
                                        <a href="" class="btn btn-sm btn-warning"><i
                                                class="fa-solid fa-pen-to-square text-dark"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>Brownie</td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-danger"><i
                                                class="fa fa-trash text-white"></i></a>
                                        <a href="" class="btn btn-sm btn-warning"><i
                                                class="fa-solid fa-pen-to-square text-dark"></i></a>
                                    </td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
