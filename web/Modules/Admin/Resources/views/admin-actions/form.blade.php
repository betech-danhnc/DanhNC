@php
$theme = Config::get('app.theme');
@endphp
@extends($theme . '.layouts.form')

@section('form_content')
<div class="row form-group">
    <div class="col col-md-3">
        {{ Form::label('name', null, ['class' => 'form-control-label']) }}
    </div>
    <div class="col-12 col-md-9">
        {{ Form::text('name', $model->name, ['class' => 'form-control']) }}
    </div>
</div>
<div class="row form-group">
    <div class="col col-md-3">
        {{ Form::label('key', null, ['class' => 'form-control-label']) }}
    </div>
    <div class="col-12 col-md-9">
        {{ Form::text('key', $model->key, ['class' => 'form-control']) }}
    </div>
</div>
<div class="row form-group">
    <div class="col col-md-3">
        {{ Form::label('controller_id', null, ['class' => 'form-control-label']) }}
    </div>
    <div class="col-12 col-md-9">
        {{ Form::text('controller_id', $model->controller_id, ['class' => 'form-control']) }}
    </div>
</div>
<div class="row form-group">
    <div class="col col-md-3">
        {{ Form::label('permission', null, ['class' => 'form-control-label']) }}
    </div>
    <div class="col-12 col-md-9">
        {{ Form::text('permission', $model->permission, ['class' => 'form-control']) }}
    </div>
</div>
@endsection