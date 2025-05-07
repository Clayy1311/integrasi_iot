<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>




    <form action="{{route('proses.login')}}" method="POST">
     @csrf
        <label for="email">Masukkan Email</label>
        <br></br>
        <input type="email" name="email" id="email">
        <br></br>
        <label for="password">Masukkan Password</label>
        <input type="password" name="password" id="password">
        <br></br>
        <button type="submit">Login</button>
    </form>
</body>
</html>