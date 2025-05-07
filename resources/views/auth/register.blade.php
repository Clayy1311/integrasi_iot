<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Register</h1>



    <form action="{{Route('register.store')}}"  method="POST">
        @csrf
         <label for="name">Masukkan Nama : </label>
         <input type="text" id="name" name="name">
         <br></br>
         <label for="email">Masukkan Email : </label>
         <input type="email" id="email" name="email">
         <br></br>
         <label for="password">Masukkan Password : </label>
         <input type="password" id="password" name="password">
         <br></br>
         <label for="password_confirmation">Password Confirmation</label>
         <input type="password" name="password_confirmation">
         <br></br>
         <button type="submit">Daftar</button>
         <br></br>
         <a href="{{'/'}}">Sudah Punya Akun?</a>

    </form>
</body>
</html>