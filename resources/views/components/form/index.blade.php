@props(['action', 'method' => 'POST', 'class' => null, 'style' =>null, 'onsubmit'=>null])

<form
action="{{ $action }}"
class="{{ $class }}"
method="{{ strtolower($method) == 'get' ? 'GET' : 'POST' }}"
style="{{ $style }}"
onsubmit="{{$onsubmit}}">
    @csrf

    @unless (in_array($method, ['GET', 'POST']))
        @method($method)
    @endunless

    {{ $slot }}

</form>