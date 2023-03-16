@extends('layout.master')


@section('content')
    <form action="/login" method="POST">
        @csrf
        @include('layout.partials.mesajes')
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email or username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="name@example.com or Username">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="********">
          </div>
          <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Login</button>
            <a  href="/register" class="btn btn-danger mb-3">Register</a>
          </div>
    </form>
@endsection
