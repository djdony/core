<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', __('models/carTypes.fields.name').':') !!}
    <p>{{ $carType->name }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/carTypes.fields.created_at').':') !!}
    <p>{{ $carType->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/carTypes.fields.updated_at').':') !!}
    <p>{{ $carType->updated_at }}</p>
</div>

