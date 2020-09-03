<!-- Question Field -->
<div class="form-group">
    {!! Form::label('question', __('models/faqs.fields.question').':') !!}
    <p>{{ $faq->question }}</p>
</div>

<!-- Answer Field -->
<div class="form-group">
    {!! Form::label('answer', __('models/faqs.fields.answer').':') !!}
    <p>{{ $faq->answer }}</p>
</div>

<!-- Type Field -->
<div class="form-group">
    {!! Form::label('type', __('models/faqs.fields.type').':') !!}
    <p>{{ $faq->type }}</p>
</div>

<!-- Sort Order Field -->
<div class="form-group">
    {!! Form::label('sort_order', __('models/faqs.fields.sort_order').':') !!}
    <p>{{ $faq->sort_order }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/faqs.fields.created_at').':') !!}
    <p>{{ $faq->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/faqs.fields.updated_at').':') !!}
    <p>{{ $faq->updated_at }}</p>
</div>

