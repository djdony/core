<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', __('models/cars.fields.name').':') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Car Type Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('car_type_id', __('models/cars.fields.car_type_id').':') !!}
    {!! Form::select('car_type_id', $car_typeItems, $car_typeItems, ['class' => 'form-control']) !!}
</div>

<!-- Max Pax Field -->
<div class="form-group col-sm-6">
    {!! Form::label('max_pax', __('models/cars.fields.max_pax').':') !!}
    {!! Form::number('max_pax', null, ['class' => 'form-control']) !!}
</div>

<!-- Max Luggage Field -->
<div class="form-group col-sm-6">
    {!! Form::label('max_luggage', __('models/cars.fields.max_luggage').':') !!}
    {!! Form::number('max_luggage', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', __('models/cars.fields.description').':') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.cars.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
