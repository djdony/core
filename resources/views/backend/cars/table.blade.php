<div class="table-responsive-sm">
    <table class="table table-striped" id="cars-table">
        <thead>
            <tr>
                <th>@lang('models/cars.fields.name')</th>
        <th>@lang('models/cars.fields.car_type_id')</th>
        <th>@lang('models/cars.fields.max_pax')</th>
        <th>@lang('models/cars.fields.max_luggage')</th>
        <th>@lang('models/cars.fields.description')</th>
        <th>@lang('models/cars.fields.image')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($cars as $car)
            <tr>
                <td>{{ $car->name }}</td>
            <td>{{ $car->car_type_id }}</td>
            <td>{{ $car->max_pax }}</td>
            <td>{{ $car->max_luggage }}</td>
            <td>{{ $car->description }}</td>
            <td>
                <table>
                    <tr>
                        @foreach($car->images as $image)
                        <td>
                            <img src="{{ asset('images/thumbs/'.$image->url) }}" alt="{{$image->url}}">
                        </td>
                        @endforeach
                    </tr>
                </table>
             </td>
                <td>
                    {!! Form::open(['route' => ['admin.cars.destroy', $car->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin.cars.show', [$car->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('admin.cars.edit', [$car->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
