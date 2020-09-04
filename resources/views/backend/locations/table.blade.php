<div class="table-responsive-sm">
    <table class="table table-striped" id="locations-table">
        <thead>
            <tr>
                <th>@lang('models/locations.fields.name')</th>
        <th>@lang('models/locations.fields.type')</th>
        <th>@lang('models/locations.fields.code')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($locations as $location)
            <tr>
                <td>{{ $location->name }}</td>
            <td>{{ $location->type }}</td>
            <td>{{ $location->code }}</td>
                <td>
                    {!! Form::open(['route' => ['admin.locations.destroy', $location->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin.locations.show', [$location->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('admin.locations.edit', [$location->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>