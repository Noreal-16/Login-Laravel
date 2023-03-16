@extends('layout.master')
@section('content')
    <form action="/register" method="POST">
        @csrf
        @include('layout.partials.mesajes')
        <div class="mb-3">
            <label for="formFile" class="form-label">Username</label>
            <input class="form-control" type="text" name="username">
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Email</label>
            <input class="form-control" type="email" name="email">
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Password</label>
            <input class="form-control" type="password" name="password">
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Password Confirm</label>
            <input class="form-control" type="password" name="password_confirmation">
          </div>
          <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Register</button>
            <a  href="/login" class="btn btn-danger mb-3">Login</a>
          </div>
    </form>
@endsection
