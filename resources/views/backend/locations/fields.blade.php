<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', __('models/locations.fields.name').':') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
{{--<div class="form-group col-sm-6">--}}
{{--    {!! Form::label('type', __('models/locations.fields.type').':') !!}--}}
{{--    {!! Form::select('type', , null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<!-- Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('code', __('models/locations.fields.code').':') !!}
    {!! Form::text('code', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.locations.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
