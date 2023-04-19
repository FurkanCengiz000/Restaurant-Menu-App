@props(['type', 'url', 'icon', 'action'])

<x-form action="{!! $url !!}" style="display: inline;" method="DELETE" onsubmit="return confirm('Your data will be removed permanently. Are you sure?')">
    <button href="{!! $url !!}" class="btn btn-sm btn-circle btn-outline-danger">
        <i class="fa-solid fa-trash"></i>
    </button>
</x-form>
