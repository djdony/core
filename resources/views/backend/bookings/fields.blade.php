@isset($locations)
    <!-- Parent Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('location', __('models/locations.fields.parent').':') !!}
        {!! Form::select('parent_id', $locations, $location->id ?? '', ['class' => 'form-control']) !!}
    </div>

<!-- From Field -->
<div class="form-group col-sm-6">
    {!! Form::label('location', __('models/locations.fields.parent').':') !!}
    {!! Form::select('parent_id', $locations, $location->id ?? '', ['class' => 'form-control']) !!}
</div>
<!-- To Field -->
<div class="form-group col-sm-6">
    {!! Form::label('location', __('models/locations.fields.parent').':') !!}
    {!! Form::select('parent_id', $locations, $location->id ?? '', ['class' => 'form-control']) !!}
</div>
@endisset
<!-- Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date', __('models/bookings.fields.date').':') !!}
    {!! Form::text('date', null, ['class' => 'form-control','id'=>'date']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#date').datetimepicker({
               format: 'YYYY-MM-DD HH:mm:ss',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush


<!-- Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('time', __('models/bookings.fields.time').':') !!}
    {!! Form::text('time', null, ['class' => 'form-control']) !!}
</div>

<!-- Flight Field -->
<div class="form-group col-sm-6">
    {!! Form::label('flight', __('models/bookings.fields.flight').':') !!}
    {!! Form::text('flight', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', __('models/bookings.fields.type').':') !!}
    {!! Form::select('type', ['STANDART' => 'STANDART', 'VIP' => 'VIP', 'GROUP' => 'GROUP'], null, ['class' => 'form-control']) !!}
</div>

<!-- Customer Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customer_id', __('models/bookings.fields.customer_id').':') !!}
    {!! Form::select('customer_id',  $locations, ['class' => 'form-control']) !!}
</div>

<!-- Info Field -->
<div class="form-group col-sm-6">
    {!! Form::label('info', __('models/bookings.fields.info').':') !!}
    {!! Form::text('info', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.bookings.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
