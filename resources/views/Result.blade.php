<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <title>Document</title>
</head>

<body>
    <!-- NAVBAR START -->
    <header class="header sticky top-0 bg-white shadow-md flex items-center justify-center px-8 py-02">
        <nav class="nav font-semibold text-lg">
            <ul class="flex items-center gap-5">
                <li class="p-4 border-b-2 border-green-500 border-opacity-0 hover:border-opacity-100 hover:text-green-500 duration-200 cursor-pointer active">
                    <a href="/beasiswa">Pilihan Beasiswa</a>
                </li>
                <li class="p-4 border-b-2 border-green-500 border-opacity-0 hover:border-opacity-100 hover:text-green-500 duration-200 cursor-pointer">
                    <a href="/register">Daftar</a>
                </li>
                <li id='nav' class="p-4 border-b-2 border-green-500 border-opacity-0 hover:border-opacity-100 hover:text-green-500 duration-200 cursor-pointer">
                    <a href="/result">Hasil</a>
                </li>
            </ul>
        </nav>
    </header>
    <!-- NAVBAR END -->
    <div>
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-lg">
            <!-- Header -->
            <div class="flex justify-between items-center border-b pb-4 mb-4">
                <div>
                    <h1 class="text-2xl font-bold">{{$data->nama}}</h1>
                    <p class="text-gray-600">{{$data->email}}</p>
                </div>
                <div class="text-right">
                    <p class="text-lg font-semibold">{{$data->beasiswa}}</p>
                    <p>{{$data->nohp}}</p>
                    <p>Semester : {{$data->semester}}</p>
                    <p>IPK : {{$data->ipk}}</p>
                    <p>Status : {{$data->status}}</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        const nav = document.querySelector('#nav')
        if (window.location.pathname === '/result') {
            nav.classList.add('border-opacity-100')
        }
    </script>
</body>

</html>