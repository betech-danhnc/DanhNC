@php
$theme = Config::get('app.theme');
@endphp
@extends($theme . '.layouts.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="pull-left">
            <h3 class="title-5 m-b-35">Show module</h3>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('admin-modules.index') }}"> Back</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    Show Module: {{ $model->name }}
                </div>
            </div>
            <div class="card-body card-block">
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class=" form-control-label">Name</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <p class="form-control-static">{{ $model->name }}</p>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class=" form-control-label">Description</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <p class="form-control-static">{{ $model->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection