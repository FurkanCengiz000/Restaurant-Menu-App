@props(['action', 'method' => 'POST', 'class' => null, 'style' =>null, 'onsubmit'=>null, 'file' => 'no'])

<form
action="{{ $action }}"
class="{{ $class }}"
method="{{ strtolower($method) == 'get' ? 'GET' : 'POST' }}"
@if ($style)
style="{{ $style }}"
@endif
@if ($onsubmit)
onsubmit="{{$onsubmit}}"
@endif
@if ($file == 'yes')
enctype="multipart/form-data"
@endif
>
    @csrf

    @unless (in_array($method, ['GET', 'POST']))
        @method($method)
    @endunless

    {{ $slot }}

</form>