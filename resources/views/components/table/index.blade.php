@props(['title'])



<table class=" table table-striped table-hover">
    <thead>
        <tr>
            <th>Status</th>
            <th>{{ $title }}</th>
            <th></th>
        </tr>
    </thead>

    <tbody>

        {{ $slot }}

    </tbody>

</table>
