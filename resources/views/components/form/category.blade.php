@props(['proses' => 'Add', 'value' => null])

<h3 class="text-center mb-4">{{ $proses }} Category</h3>
<div class="d-flex justify-content-center mb-3 ">
    <div class="input-group mb-3">
        <input type="text" name="name" value="{{ old('name', $value) }}" placeholder="{{ $proses }} Category"
            class="form-control">
        <button class="btn btn-outline-success" type="submit">{{ $proses }}</button>
    </div>
</div>

@error('name')
    <div class="alert alert-danger" role="alert">
        {{ $message }}
    </div>
@enderror
