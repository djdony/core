<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', __('models/customers.fields.name').':') !!}
    <p>{{ $customer->name }}</p>
</div>

<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', __('models/customers.fields.phone').':') !!}
    <p>{{ $customer->phone }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', __('models/customers.fields.email').':') !!}
    <p>{{ $customer->email }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/customers.fields.created_at').':') !!}
    <p>{{ $customer->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/customers.fields.updated_at').':') !!}
    <p>{{ $customer->updated_at }}</p>
</div>

