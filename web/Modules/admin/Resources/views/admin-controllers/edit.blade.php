@php
$theme = Config::get('app.theme');
@endphp
@extends($theme . '.layouts.master')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h3 class="title-5 m-b-35">Edit Module</h3>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('admin-controllers.index') }}"> Back</a>
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
                    Edit Module: {{ $model->name }}
                </div>
            </div>
            @if (isset($model->id))
            <form action="{{ route('admin-controllers.update', $model->id) }}" method="POST">
                @csrf
                @method('PUT')
                @else
                <form action="{{ route('admin-controllers.store') }}" method="POST">
                    @csrf
                    @endif
                    <div class="card-body card-block">
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="name" class=" form-control-label">Name</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="name" placeholder="Name" class="form-control" value="{{ $model->name }}">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="description" class=" form-control-label">Description</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="description" placeholder="Description" class="form-control" value="{{ $model->description }}">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="name" class=" form-control-label">Module Id</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="module_id" placeholder="Module Id" class="form-control" value="{{ $model->module_id }}">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                    </div>
                </form>
        </div>
    </div>
</div>

@endsection