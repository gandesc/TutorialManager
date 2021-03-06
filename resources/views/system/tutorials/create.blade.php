@extends('layouts.app')

@section('pageTitle', __("Tutorials"))

@section('content')
<section class="content-header">
    @include('partials.breadcrumbs')
</section>
<section class="content">
    <div class="row" v-cloak>
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <div class="box-title">
                        {{ __("Create Tutorial") }}
                    </div>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool btn-sm" data-widget="collapse">
                            <i class="fa fa-minus">
                            </i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    {!! Form::open(['method' => 'POST', 'url' => '/system/tutorials']) !!}
                    <div class="row">
                        @include('tutorials::form')
                    </div>
                    <center>
                        {!! Form::submit(__("Save"), ['class' => 'btn btn-primary ']) !!}
                    </center>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@push('scripts')
<script type="text/javascript" src="/js/generic.js"></script>
@endpush