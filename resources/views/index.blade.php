@extends('layouts.main')

@section('content')
    <h1 class="text-center mb-3 title">Restaurant Menu</h1>

    <div class="accordion mb-3" id="accordionPanelsStayOpenExample">

        @foreach ($categories as $category)
            @if ($category->is_active == 1)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-heading-{{ $category->id }}">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-{{ $category->id }}" aria-expanded="false"
                            aria-controls="panelsStayOpen-{{ $category->id }}">
                            {{ $category->name }}
                        </button>
                    </h2>
                    <div id="panelsStayOpen-{{ $category->id }}" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-heading-{{ $category->id }}">
                        <div class="accordion-body">

                            @foreach ($category->foods as $food)
                                @if ($food->is_active == 1)
                                    <div class="row">
                                        <div class="col-lg-3 mb-4"><img class="img-fluid rounded shadow" src="{{ asset($food->image) }}"
                                                alt="Food image"></div>
                                        <div class="col-lg-7">
                                            <div class="d-flex d-flex align-items-center" style="height: 75%">
                                                <div>
                                                    <h2 class="fs-3 title text-center pt-3">{{ $food->name }}</h2>
                                                    <p class="">{{ $food->description }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="d-flex d-flex align-items-center" style="height: 75%"><span
                                                    class="fs-1 title text-center">{{ $food->price }} $</span></div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach

                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
@endsection
