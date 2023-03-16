<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/register" method="POST">
        @csrf
        <label >username</label>
        <input type="text" name="username">
        <label >email</label>
        <input type="email" name="email">
        <label >password</label>
        <input type="password" name="password">
        <label >confirm password</label>
        <input type="password" name="password_confirmation">
        <button type="submit"> Register</button>
    </form>

</body>
</html>