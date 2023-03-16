@extends('layout.master')
@section('content')
@include('layout.partials.mesajes')
   @auth
       <p>Bienvenido {{auth()->user()->name ?? auth()->user()->username }} estas autenticado</p>
   @endauth
   @guest
   <p>Para ver el contenido tienes que <a href="/login">Iniciar sesion</a> </p>
   @endguest
@endsection
