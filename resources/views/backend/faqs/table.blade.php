<div class="table-responsive-sm">
    <table class="table table-striped" id="faqs-table">
        <thead>
            <tr>
                <th>@lang('models/faqs.fields.question')</th>
        <th>@lang('models/faqs.fields.answer')</th>
        <th>@lang('models/faqs.fields.type')</th>
        <th>@lang('models/faqs.fields.sort_order')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($faqs as $faq)
            <tr>
                <td>{{ $faq->question }}</td>
            <td>{{ $faq->answer }}</td>
            <td>{{ $faq->type }}</td>
            <td>{{ $faq->sort_order }}</td>
                <td>
                    {!! Form::open(['route' => ['admin.faqs.destroy', $faq->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin.faqs.show', [$faq->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('admin.faqs.edit', [$faq->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>