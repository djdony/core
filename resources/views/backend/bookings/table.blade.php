<div class="table-responsive-sm">
    <table class="table table-striped" id="bookings-table">
        <thead>
            <tr>
                <th>@lang('models/bookings.fields.from')</th>
        <th>@lang('models/bookings.fields.to')</th>
        <th>@lang('models/bookings.fields.date')</th>
        <th>@lang('models/bookings.fields.time')</th>
        <th>@lang('models/bookings.fields.flight')</th>
        <th>@lang('models/bookings.fields.type')</th>
        <th>@lang('models/bookings.fields.customer_id')</th>
        <th>@lang('models/bookings.fields.info')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($bookings as $booking)
            <tr>
                <td>{{ $booking->from }}</td>
            <td>{{ $booking->to }}</td>
            <td>{{ $booking->date }}</td>
            <td>{{ $booking->time }}</td>
            <td>{{ $booking->flight }}</td>
            <td>{{ $booking->type }}</td>
            <td>{{ $booking->customer_id }}</td>
            <td>{{ $booking->info }}</td>
                <td>
                    {!! Form::open(['route' => ['admin.bookings.destroy', $booking->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin.bookings.show', [$booking->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('admin.bookings.edit', [$booking->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>