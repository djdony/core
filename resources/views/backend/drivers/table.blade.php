<div class="table-responsive-sm">
    <table class="table table-striped" id="drivers-table">
        <thead>
            <tr>
                <th>@lang('models/drivers.fields.name')</th>
        <th>@lang('models/drivers.fields.last_name')</th>
        <th>@lang('models/drivers.fields.phone')</th>
        <th>@lang('models/drivers.fields.email')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($drivers as $driver)
            <tr>
                <td>{{ $driver->name }}</td>
            <td>{{ $driver->last_name }}</td>
            <td>{{ $driver->phone }}</td>
            <td>{{ $driver->email }}</td>
                <td>
                    {!! Form::open(['route' => ['admin.drivers.destroy', $driver->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin.drivers.show', [$driver->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('admin.drivers.edit', [$driver->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>