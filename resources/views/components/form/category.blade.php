@props(['proses' => 'Add'])

<h3 class="text-center mb-4">{{ $proses }} Category</h3>
<div class="d-flex justify-content-center mb-3 ">
    <div class="input-group mb-3">
        <input type="text" placeholder="{{ $proses }} Category" class="form-control">
        <button class="btn btn-outline-success" type="button">{{ $proses }}</button>
    </div>
</div>
