@isset($parentItems)
    <!-- Parent Field -->
<div class="form-group col-sm-6">
    {!! Form::label('location', __('models/locations.fields.parent').':') !!}
    {!! Form::select('parent_id', $parentItems, $location->parent_id ?? '', ['class' => 'form-control']) !!}
</div>
@endisset


<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', __('models/locations.fields.name').':') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<!-- Type Field -->
{{--<div class="form-group col-sm-6">--}}
{{--    {!! Form::label('type', __('models/locations.fields.type').':') !!}--}}
{{--    {!! Form::text('type', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<!-- Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('code', __('models/locations.fields.code').':') !!}
    {!! Form::text('code', null, ['class' => 'form-control']) !!}
</div>

<!-- Lat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lat', 'Lattitude :') !!}
    {!! Form::text('lat', null, ['class' => 'form-control']) !!}
</div>

<!-- Lon Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lon', 'Longtitude :') !!}
    {!! Form::text('lon', null, ['class' => 'form-control']) !!}
</div>
{{ Form::hidden('type', app('request')->input('type')) }}
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.locations.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>


