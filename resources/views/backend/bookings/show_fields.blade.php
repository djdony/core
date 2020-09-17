<!-- From Field -->
<div class="form-group">
    {!! Form::label('from', __('models/bookings.fields.from').':') !!}
    <p>{{ $booking->from }}</p>
</div>

<!-- To Field -->
<div class="form-group">
    {!! Form::label('to', __('models/bookings.fields.to').':') !!}
    <p>{{ $booking->to }}</p>
</div>

<!-- Date Field -->
<div class="form-group">
    {!! Form::label('date', __('models/bookings.fields.date').':') !!}
    <p>{{ $booking->date }}</p>
</div>

<!-- Time Field -->
<div class="form-group">
    {!! Form::label('time', __('models/bookings.fields.time').':') !!}
    <p>{{ $booking->time }}</p>
</div>

<!-- Flight Field -->
<div class="form-group">
    {!! Form::label('flight', __('models/bookings.fields.flight').':') !!}
    <p>{{ $booking->flight }}</p>
</div>

<!-- Type Field -->
<div class="form-group">
    {!! Form::label('type', __('models/bookings.fields.type').':') !!}
    <p>{{ $booking->type }}</p>
</div>

<!-- Customer Id Field -->
<div class="form-group">
    {!! Form::label('customer_id', __('models/bookings.fields.customer_id').':') !!}
    <p>{{ $booking->customer_id }}</p>
</div>

<!-- Info Field -->
<div class="form-group">
    {!! Form::label('info', __('models/bookings.fields.info').':') !!}
    <p>{{ $booking->info }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/bookings.fields.created_at').':') !!}
    <p>{{ $booking->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/bookings.fields.updated_at').':') !!}
    <p>{{ $booking->updated_at }}</p>
</div>

