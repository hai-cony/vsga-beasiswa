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
                <li id='nav' class="p-4 border-b-2 border-green-500 border-opacity-0 hover:border-opacity-100 hover:text-green-500 duration-200 cursor-pointer">
                    <a href="/register">Daftar</a>
                </li>
                <li class="p-4 border-b-2 border-green-500 border-opacity-0 hover:border-opacity-100 hover:text-green-500 duration-200 cursor-pointer">
                    <a href="/result">Hasil</a>
                </li>
            </ul>
        </nav>
    </header>
    <div>
        <div id="section2" class="p-8 mt-6 lg:mt-0 rounded shadow bg-white flex justify-center">

            <form action="/register" method="POST" enctype="multipart/form-data">
                @csrf
                <div class=" mb-6">
                    <div class="">
                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
                            Nama
                        </label>
                    </div>
                    <div class="">
                        <input required class="border form-input block w-full focus:bg-white" id="my-textfield" type="text" name="nama" value={{$nama}}>
                    </div>
                </div>
                <div class=" mb-6">
                    <div class="">
                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
                            Email
                        </label>
                    </div>
                    <div class="">
                        <input required class="border form-input block w-full focus:bg-white" id="my-textfield" type="text" name="email" value={{$email}}>
                    </div>
                </div>
                <div class=" mb-6">
                    <div class="">
                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
                            Nomor HP
                        </label>
                    </div>
                    <div class="">
                        <input required class="border form-input block w-full focus:bg-white" id="my-textfield" type="text" name="phone">
                    </div>
                </div>

                <div class="mb-6">
                    <div class="">
                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="semester">
                            Semester Saat Ini
                        </label>
                    </div>
                    <div class="">
                        <select name="semester" class="border form-select block w-full focus:bg-white" id="semester">
                            <option value="null">Pilih</option>
                            <option value="1">Semester 1</option>
                            <option value="2">Semester 2</option>
                            <option value="3">Semester 3</option>
                            <option value="4">Semester 4</option>
                            <option value="5">Semester 5</option>
                            <option value="6">Semester 6</option>
                            <option value="7">Semester 7</option>
                            <option value="8">Semester 8</option>
                        </select>
                    </div>
                </div>

                <div class=" mb-6">
                    <div class="">
                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="ipk">
                            IPK Terakhir
                        </label>
                    </div>
                    <div class="bg-gray-200">
                        <input disabled class="border form-input block w-full bg-gray-200 focus:bg-gray-200" id="ipk" name="ipk" type="text" value={{$ipk}}>
                    </div>
                </div>

                <div class="mb-6">
                    <div class="">
                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-select">
                            Pilihan Beasiswa
                        </label>
                    </div>
                    <div class="">
                        <select name="beasiswa" class="border form-select block w-full focus:bg-white" id="my-select">
                            <option value="null">Pilih</option>
                            <option value="Beasiswa LPDP">LPDP (Lembaga Pengelola Dana Pendidikan)</option>
                            <option value="Beasiswa Seni dan Desain">Seni dan Desain</option>
                            <option value="Beasiswa Bidikmisi">Bidikmisi</option>
                            <option value="Beasiswa KIP">KIP</option>
                        </select>
                    </div>
                </div>

                <div class="">
                    <div class="">
                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textarea">
                            Upload Berkas Syarat
                        </label>
                    </div>
                    <div class="">
                        <input required type="file" name="file">
                    </div>
                </div>

                <div class="md:items-center mt-6">
                    <div class="w-full">
                        <button class="w-full shadow bg-yellow-700 hover:bg-yellow-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                            Daftar
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>
    <script>
        const nav = document.querySelector('#nav')
        if (window.location.pathname === '/register') {
            nav.classList.add('border-opacity-100')
        }
    </script>
</body>

</html>