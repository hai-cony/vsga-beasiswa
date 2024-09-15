<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>

<body>
    <div class="flex md:w-1/2 justify-center py-10 items-center bg-white">
        <form class="bg-white" action="/account/login" method="POST">
            @csrf
            <h1 class="text-gray-800 font-bold text-2xl mb-1">Selamat Datang!</h1>
            <p class="text-sm font-normal text-gray-600 mb-7">Masuk</p>
            <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                <input class="pl-2 outline-none border-none" type="text" name="email" placeholder="Email" />
            </div>
            <div class="flex items-center border-2 py-2 px-3 rounded-2xl">
                <input class="pl-2 outline-none border-none" type="text" name="password" placeholder="Password" />
            </div>
            <button type="submit" class="block w-full bg-indigo-600 mt-4 py-2 rounded-2xl text-white font-semibold mb-2">Daftar</button>
        </form>
    </div>
</body>

</html>