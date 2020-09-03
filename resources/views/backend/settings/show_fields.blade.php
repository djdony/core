<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', __('models/settings.fields.title').':') !!}
    <p>{{ $setting->title }}</p>
</div>

<!-- About Field -->
<div class="form-group">
    {!! Form::label('about', __('models/settings.fields.about').':') !!}
    <p>{{ $setting->about }}</p>
</div>

<!-- Service Title Field -->
<div class="form-group">
    {!! Form::label('service_title', __('models/settings.fields.service_title').':') !!}
    <p>{{ $setting->service_title }}</p>
</div>

<!-- Services Field -->
<div class="form-group">
    {!! Form::label('services', __('models/settings.fields.services').':') !!}
    <p>{{ $setting->services }}</p>
</div>

<!-- Contact Title Field -->
<div class="form-group">
    {!! Form::label('contact_title', __('models/settings.fields.contact_title').':') !!}
    <p>{{ $setting->contact_title }}</p>
</div>

<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address', __('models/settings.fields.address').':') !!}
    <p>{{ $setting->address }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', __('models/settings.fields.email').':') !!}
    <p>{{ $setting->email }}</p>
</div>

<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', __('models/settings.fields.phone').':') !!}
    <p>{{ $setting->phone }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/settings.fields.created_at').':') !!}
    <p>{{ $setting->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/settings.fields.updated_at').':') !!}
    <p>{{ $setting->updated_at }}</p>
</div>

