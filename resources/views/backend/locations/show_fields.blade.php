<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', __('models/locations.fields.name').':') !!}
    <p>{{ $location->name }}</p>
</div>

<!-- Type Field -->
<div class="form-group">
    {!! Form::label('type', __('models/locations.fields.type').':') !!}
    <p>{{ $location->type }}</p>
</div>

<!-- Code Field -->
<div class="form-group">
    {!! Form::label('code', __('models/locations.fields.code').':') !!}
    <p>{{ $location->code }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/locations.fields.created_at').':') !!}
    <p>{{ $location->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/locations.fields.updated_at').':') !!}
    <p>{{ $location->updated_at }}</p>
</div>

