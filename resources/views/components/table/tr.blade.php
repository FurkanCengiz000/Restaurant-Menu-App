@props(['name'])

<tr>
    <td><input type="checkbox" name="" id=""></td>
    <td>{{ $name }}</td>
    <td>
        {{ $slot }}
    </td>
</tr>