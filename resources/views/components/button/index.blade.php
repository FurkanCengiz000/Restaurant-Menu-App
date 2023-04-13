@props(['type', 'url', 'icon'])

<a href="{!! $url !!}" class="btn btn-sm btn-circle btn-outline-{{ $type }}">
    <i class="fa-solid fa-{{ $icon }}"></i>
</a>