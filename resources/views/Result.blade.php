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
    <script>
        const nav = document.querySelector('#nav')
        if (window.location.pathname === '/result') {
            nav.classList.add('border-opacity-100')
        }
    </script>
</body>

</html>