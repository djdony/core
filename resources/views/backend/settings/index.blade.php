@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">@lang('models/settings.plural')</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             @lang('models/settings.plural')
                             @forelse($settings as $setting)

                             @empty
                                 <a class="pull-right" href="{{ route('admin.settings.create') }}"><i class="fa fa-plus-square fa-lg"></i></a>
                             @endforelse
                         </div>
                         <div class="card-body">
                             @include('backend.settings.table')
                              <div class="pull-right mr-3">

                              </div>
                         </div>
                     </div>
                  </div>
             </div>
         </div>
    </div>
@endsection

