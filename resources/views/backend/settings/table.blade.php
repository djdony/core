<div class="table-responsive-sm">
    <table class="table table-striped" id="settings-table">
        <thead>
            <tr>
                <th>@lang('models/settings.fields.company')</th>
                <th>@lang('models/settings.fields.title')</th>
        <th>@lang('models/settings.fields.about')</th>
        <th>@lang('models/settings.fields.service_title')</th>
        <th>@lang('models/settings.fields.services')</th>
        <th>@lang('models/settings.fields.contact_title')</th>
        <th>@lang('models/settings.fields.address')</th>
        <th>@lang('models/settings.fields.email')</th>
        <th>@lang('models/settings.fields.phone')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($settings as $setting)
            <tr>
                <td>{{ $setting->company }}</td>
                <td>{{ $setting->title }}</td>
            <td>{{ $setting->about }}</td>
            <td>{{ $setting->service_title }}</td>
            <td>{{ $setting->services }}</td>
            <td>{{ $setting->contact_title }}</td>
            <td>{{ $setting->address }}</td>
            <td>{{ $setting->email }}</td>
            <td>{{ $setting->phone }}</td>
                <td>
                    <div class='btn-group'>
                        <a href="{{ route('admin.settings.show', [$setting->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('admin.settings.edit', [$setting->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
