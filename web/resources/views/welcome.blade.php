@php
$theme = Config::get('app.theme');
@endphp
@extends($theme . '.layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
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
            <li>
                <a href="https://local-blab.betech-vn.com/admin/admin-modules">Modules</a>
            </li>
            <li>
                <a href="https://local-blab.betech-vn.com/admin/admin-controllers">Controllers</a>
            </li>
            <li>
                <a href="https://local-blab.betech-vn.com/admin/admin-actions">Actions</a>
            </li>
            <li>
                <a href="https://local-blab.betech-vn.com/admin/admin-roles">Roles</a>
            </li>
        </ul>
    </div>
</div>
@endsection
