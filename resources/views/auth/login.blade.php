<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="/login" method="POST">
        @csrf
        
        <label >email</label>
        <input type="text" name="username" id="">
        <label >password</label>
        <input type="password" name="password" id="">
        <button type="submit"> Login</button>
    </form>

</body>
</html>