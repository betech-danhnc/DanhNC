@php
$theme = Config::get('app.theme');
@endphp
@extends($theme . '.layouts.index')

@section('data_content')
<table class="table table-data2">
    <thead>
        <tr>
            <th>
                <label class="au-checkbox">
                    <input type="checkbox">
                    <span class="au-checkmark"></span>
                </label>
            </th>
            <th>No</th>
            <th>Name</th>
            <th>Parent</th>
            <th>Url</th>
            <th>Icon</th>
            <th>Type</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($models as $item)
        <tr class="tr-shadow">
            <td>
                <label class="au-checkbox">
                    <input type="checkbox">
                    <span class="au-checkmark"></span>
                </label>
            </td>
            <td>{{ ++$i }}</td>
            <td>{{ $item->name }}</td>
            <td>
                @php
                echo $item->getParentLink();
                @endphp
            </td>
            <td>
                @php
                echo $item->getFullUrl();
                @endphp
            </td>
            <td>{{ $item->icon }}</td>
            <td>
                @php
                echo $item->getType();
                @endphp
            </td>
            <td>
                <div class="table-data-feature">
                    <a class="item" href="{{ route($controller . '.show', $item->id) }}"><i class="zmdi zmdi-mail-send"></i></a>
                    <a class="item" href="{{ route($controller . '.edit', $item->id) }}"><i class="zmdi zmdi-edit"></i></a>
                    <form action="{{ route($controller . '.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="item" data-toggle="tooltip" data-placement="top" type="submit"><i class="zmdi zmdi-delete"></i></button>
                    </form>
                </div>
            </td>
        </tr>
        <tr class="spacer"></tr>
        @endforeach
    </tbody>
</table>
@endsection