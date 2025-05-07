<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
   
    <div class="flex h-screen bg-indigo-700">
        <div class="w-full max-w-xs m-auto bg-indigo-100 rounded p-5">  
            <header>
                <img class="w-20 mx-auto mb-5" src="https://img.icons8.com/fluent/344/year-of-tiger.png" />
              </header> 
        

    <form action="{{route('proses.login')}}" method="POST">
     @csrf
     <div>
        <label class="block mb-2 text-indigo-500" for="email">Masukkan Email</label>
      
        <input  class="w-full p-2 mb-6 text-indigo-700 border-b-2 border-indigo-500 outline-none focus:bg-gray-300" type="email" name="email" id="email">
     </div>
     <div>
        <label class="block mb-2 text-indigo-500" for="password">Masukkan Password</label>
        <input class="w-full p-2 mb-6 text-indigo-700 border-b-2 border-indigo-500 outline-none focus:bg-gray-300" type="password" name="password" id="password">
     </div>
        <div>          
        <input class="w-full bg-indigo-700 hover:bg-pink-700 text-white font-bold py-2 px-4 mb-6 rounded" type="submit">
      </div>   
      <div>
        <a class="text-indigo-700 hover:text-pink-700 text-sm float-right" href="{{'register'}}">Belum Punya akun</a>
      </div>
    </form>

    </div>
</body>
</html>