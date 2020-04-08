@php
$theme = Config::get('app.theme');
@endphp
@extends($theme . '.layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="title m-b-md">
            Laravel
        </div>
        <br>
        <ul>
            <li>
                <a href="https://local-blab.betech-vn.com/admin">Admin</a>
            </li>
            <li>
                <a href="https://local-blab.betech-vn.com/home">Home</a>
            </li>
            <li>
                <a href="https://local-blab.betech-vn.com/login">Login</a>
            </li>
            <li>
                <a href="https://local-blab.betech-vn.com/register">Register</a>
            </li>
        </ul>
    </div>
</div>
@endsection
