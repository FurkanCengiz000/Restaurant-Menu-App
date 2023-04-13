@props(['name'])

<div class="form-group row">
    <label for="first_name" class="col-md-3 col-form-label">{{ $name }}</label>
    <div class="col-md-9">
        <p class="form-control-plaintext text-muted">{{ $slot }}</p>
    </div>
</div>
