@extends('cooladmin.layouts.master')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h3 class="title-5 m-b-35">Edit</h3>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route($controller . '.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    Edit Controller: {{ $model->name }}
                </div>
            </div>

            @if (isset($model->id))
            {{ Form::model($model, ['route' => [$controller . '.update', $model->id], 'method' => 'put']) }}
            @else
            {{ Form::model($model, ['route' => [$controller . '.store'], 'method' => 'post']) }}
            @endif
            <div class="card-body card-block">
                @yield('form_content')
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Submit
                </button>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>

@endsection