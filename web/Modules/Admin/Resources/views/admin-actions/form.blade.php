@php
$theme = Config::get('app.theme');
@endphp
@extends($theme . '.layouts.master')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h3 class="title-5 m-b-35">Edit</h3>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('admin-actions.index') }}"> Back</a>
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
            <form action="{{ route('admin-actions.update', $model->id) }}" method="POST">
                @csrf
                @method('PUT')
            @else
            <form action="{{ route('admin-actions.store') }}" method="POST">
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
                                <label for="key" class=" form-control-label">Key</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="key" placeholder="Key" class="form-control" value="{{ $model->key }}">
                            </div>
                        </div>
                         <div class="row form-group">
                             <div class="col col-md-3">
                                 <label for="controller_id" class=" form-control-label">Controller Id</label>
                             </div>
                             <div class="col-12 col-md-9">
                                 <input type="text" name="controller_id" placeholder="Controller Id" class="form-control" value="{{ $model->controller_id }}">
                             </div>
                         </div>
                         <div class="row form-group">
                             <div class="col col-md-3">
                                 <label for="permission" class=" form-control-label">Permission</label>
                             </div>
                             <div class="col-12 col-md-9">
                                 <input type="text" name="permission" placeholder="Permission" class="form-control" value="{{ $model->permission }}">
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