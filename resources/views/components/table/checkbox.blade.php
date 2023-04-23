@props(['is_active', 'category_is_active', 'checkbox_url'])

<x-form action="{!! $checkbox_url !!}" method="PUT">
    <td>
        <button class="border-0 bg-transparent" type="submit">
            <i class="fs-5 fa-sharp fa-regular @if ($is_active == 1 &&  $category_is_active == 1)  fa-square-check @else fa-square @endif"></i>
        </button>
    </td>
</x-form>
