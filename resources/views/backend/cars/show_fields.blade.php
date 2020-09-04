<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', __('models/cars.fields.name').':') !!}
    <p>{{ $car->name }}</p>
</div>

<!-- Car Type Id Field -->
<div class="form-group">
    {!! Form::label('car_type_id', __('models/cars.fields.car_type_id').':') !!}
    <p>{{ $car->car_type_id }}</p>
</div>

<!-- Max Pax Field -->
<div class="form-group">
    {!! Form::label('max_pax', __('models/cars.fields.max_pax').':') !!}
    <p>{{ $car->max_pax }}</p>
</div>

<!-- Max Luggage Field -->
<div class="form-group">
    {!! Form::label('max_luggage', __('models/cars.fields.max_luggage').':') !!}
    <p>{{ $car->max_luggage }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', __('models/cars.fields.description').':') !!}
    <p>{{ $car->description }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/cars.fields.created_at').':') !!}
    <p>{{ $car->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/cars.fields.updated_at').':') !!}
    <p>{{ $car->updated_at }}</p>
</div>

