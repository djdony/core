<!-- Company Field -->
<div class="form-group col-sm-6">
    {!! Form::label('company', __('models/settings.fields.company').':') !!}
    {!! Form::text('company', null, ['class' => 'form-control']) !!}
</div>
<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', __('models/settings.fields.title').':') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- About Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('about', __('models/settings.fields.about').':') !!}
    {!! Form::textarea('about', null, ['class' => 'form-control', 'id'=>"editor"]) !!}
</div>

<!-- Service Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('service_title', __('models/settings.fields.service_title').':') !!}
    {!! Form::text('service_title', null, ['class' => 'form-control']) !!}
</div>

<!-- Services Field -->
<div class="form-group col-sm-6">
    {!! Form::label('services', __('models/settings.fields.services').':') !!}
    {!! Form::text('services', null, ['class' => 'form-control']) !!}
</div>

<!-- Contact Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contact_title', __('models/settings.fields.contact_title').':') !!}
    {!! Form::text('contact_title', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', __('models/settings.fields.address').':') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', __('models/settings.fields.email').':') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', __('models/settings.fields.phone').':') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.settings.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
