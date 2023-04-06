@extends('layouts.app')
@section('title', 'Admin')
@section('content')
    <div class="container-fluid">
        <div class="row">

            @include('admin.partials._menuBar')

            <div class="col-10">

                <h1 class="text-center">Desserts</h1>

                <div class="row">
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                        aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a
                                    class="text-decoration-none text-muted" href="{{ route('admin.addFood') }}">Add Food</a></li>
                        </ol>
                    </nav>
                </div>

                @include('admin.partials._search')

                @include('admin.partials._foods')

            </div>
        </div>
    </div>
@endsection
