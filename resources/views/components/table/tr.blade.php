@props(['name', 'is_active', 'category_is_active'=>'1', 'checkbox_url'])

<tr>
    <x-table.checkbox is_active="{{ $is_active }}" category_is_active="{{ $category_is_active }}" checkbox_url="{{ $checkbox_url }}" />
    <td>{{ $name }}</td>
    <td>
        {{ $slot }}
    </td>
</tr>