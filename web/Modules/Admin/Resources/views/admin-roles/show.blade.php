@php
$theme = Config::get('app.theme');
@endphp
@extends($theme . '.layouts.show')

@section('header_content')
Show module: {{ $model->name }}
@endsection
@section('data_content')
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
        <label class=" form-control-label">Code</label>
    </div>
    <div class="col-12 col-md-9">
        <p class="form-control-static">{{ $model->code }}</p>
    </div>
</div>
<div class="row form-group">
    <div class="col col-md-3">
        <label class=" form-control-label">Weight</label>
    </div>
    <div class="col-12 col-md-9">
        <p class="form-control-static">{{ $model->weight }}</p>
    </div>
</div>
@endsection