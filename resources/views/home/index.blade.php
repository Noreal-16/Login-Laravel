<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1>Bienvenido Home</h1>
   @auth
       <p>Bienvenido {{auth()->user()->name ?? auth()->user()->username }} estas autenticado</p>
       <a href="/logout">Logout</a>
   @endauth
   @guest
   <p>Para ver el contenido tienes que <a href="/login">Iniciar sesion</a> </p>
   @endguest
</body>
</html>