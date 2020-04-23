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
        {{ Form::label('code', null, ['class' => 'form-control-label']) }}
    </div>
    <div class="col-12 col-md-9">
        {{ Form::text('code', $model->code, ['class' => 'form-control']) }}
    </div>
</div>
<div class="row form-group">
    <div class="col col-md-3">
        {{ Form::label('status', null, ['class' => 'form-control-label']) }}
    </div>
    <div class="col-12 col-md-9">
        {{ Form::text('status', $model->status, ['class' => 'form-control']) }}
    </div>
</div>
<?php
/*
<div class="row form-group">
    <div class="col col-md-3">
        {{ Form::label('working_type', null, ['class' => 'form-control-label']) }}
    </div>
    <div class="col-12 col-md-9">
        {{ Form::text('working_type', $model->working_type, ['class' => 'form-control']) }}
    </div>
</div>
<div class="row form-group">
    <div class="col col-md-3">
        {{ Form::label('isStaff', null, ['class' => 'form-control-label']) }}
    </div>
    <div class="col-12 col-md-9">
        {{ Form::text('isStaff', $model->isStaff, ['class' => 'form-control']) }}
    </div>
</div>
*/
?>
<div class="row form-group">
    <div class="col col-md-3">
        {{ Form::label('weight', null, ['class' => 'form-control-label']) }}
    </div>
    <div class="col-12 col-md-9">
        {{ Form::text('weight', $model->weight, ['class' => 'form-control']) }}
    </div>
</div>
<div class="row form-group">
    <div class="col col-md-3">
        {{ Form::label('status', null, ['class' => 'form-control-label']) }}
    </div>
    <div class="col-12 col-md-9">
        {{ Form::text('status', $model->status, ['class' => 'form-control']) }}
    </div>
</div>
@endsection

