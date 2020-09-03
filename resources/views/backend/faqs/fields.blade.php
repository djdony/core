<!-- Question Field -->
<div class="form-group col-sm-6">
    {!! Form::label('question', __('models/faqs.fields.question').':') !!}
    {!! Form::text('question', null, ['class' => 'form-control']) !!}
</div>

<!-- Answer Field -->
<div class="form-group col-sm-6">
    {!! Form::label('answer', __('models/faqs.fields.answer').':') !!}
    {!! Form::text('answer', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', __('models/faqs.fields.type').':') !!}
    {!! Form::number('type', null, ['class' => 'form-control']) !!}
</div>

<!-- Sort Order Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sort_order', __('models/faqs.fields.sort_order').':') !!}
    {!! Form::number('sort_order', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.faqs.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
