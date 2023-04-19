@props(['name' => 'Category', 'id'=> null])
<main class="py-5">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-title">
                        <strong>{{ $name }} Details</strong>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                {{ $slot }}
                                <hr>
                                <div class="form-group row mb-0">
                                    <div class="col-md-9 offset-md-3">
                                        <a
                                        @if ($name == 'Category')
                                            {{ 'true' }}
                                            href="{{ route('categories.edit', $id) }}"
                                        @else
                                            href="{{ route('food.edit', $id) }}"
                                            
                                        @endif
                                            class="btn btn-outline-warning">Edit</a>

                                        <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>