<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://kit.fontawesome.com/c100dce926.js" crossorigin="anonymous"></script>
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

<body>
    <div class="h-screen bg-gray-50 flex flex-col justify-center	 ">



        <div class="flex justify-center items-center bg-gray-50    ">
            <a href="www"><img src="./images/uotlogo.png" class="w-24 h-24 mb-4"></a>
        </div>

        <div class="   pt-2    ">

            <div class="flex justify-center items-center  font-serif    ">
                <div class="bg-white   w-[36%] p-6  rounded-lg  shadow-lg">


                    <div class=" text-red-700  text-center flex justify-center 	">
                        <i
                            class="fa-solid fa-x text-center border-red-700 border-4 rounded-full	 w-14 h-14 flex items-center justify-center text-2xl				font-semibold		"></i>

                    </div>
                    <p class="text-center mt-7 font-serif	text-2xl	text-slate-700			"> Are You Sure?</p>
                    <div class="my-6  text-gray-400">
                        <p class="text-2xl		font-medium mt-4 	"> Do yo realy want to delete these
                            record
                            ?This
                        </p>
                        <p class="text-center"> process cannot be undone.</p>
                    </div>

                    <div class=" text-center ">
                        <button type="button" class="bg-gray-400			mx-5	 px-8 py-2 text-white">Cancle</button>
                        <button type="button" class="bg-red-600					 px-8 py-2 text-white">Delete</button>
                    </div>
                </div>
            </div>
            <div>

            </div>




        </div>
    </div>
    </div>




</body>

</html>
