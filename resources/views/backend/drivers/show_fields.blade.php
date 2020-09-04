<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', __('models/drivers.fields.name').':') !!}
    <p>{{ $driver->name }}</p>
</div>

<!-- Last Name Field -->
<div class="form-group">
    {!! Form::label('last_name', __('models/drivers.fields.last_name').':') !!}
    <p>{{ $driver->last_name }}</p>
</div>

<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', __('models/drivers.fields.phone').':') !!}
    <p>{{ $driver->phone }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', __('models/drivers.fields.email').':') !!}
    <p>{{ $driver->email }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/drivers.fields.created_at').':') !!}
    <p>{{ $driver->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/drivers.fields.updated_at').':') !!}
    <p>{{ $driver->updated_at }}</p>
</div>

