<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Laravel</title>

        @vite('resources/css/app.css')

    </head>
    <body class="bg-[#090420] overflow-hidden">
        <div class="flex h-[100vh] items-center px-3 flex-wrap overflow-hidden">
            <div class="py-14 h-[97vh] p-2 w-1/12 text-gray-500 text-xl text-center flex flex-col justify-between">
                <a href="">Logo</a>
                <div class="grid grid-cols-1 gap-10">
                    <a href="" class="activeMenu"><i class="fas fa-home"></i></a>
                    <a href="" class=""><i class="fas fa-bell"></i></a>
                    <a href="" class=""><i class="fas fa-plus"></i></a>
                    <a href="" class=""><i class="fas fa-heart"></i></a>
                    <a href="" class=""><i class="fas fa-user"></i></a>
                </div>
                <a href="" class=" border-t-2 w-14 mx-auto border-gray-100/10 pt-6"><i class="fas fa-power-off"></i></a>
            </div>
            <div class="bg-white rounded-3xl overflow-y-scroll space-y-10 h-[97vh] p-10 w-11/12">
                <div class="rounded-full p-3 bg-[#f6f7f8] flex w-5/12">
                    <button><i class="fas fa-search"></i></button>
                    <input type="text" class="bg-transparent focus:outline-none px-3 w-11/12">
                </div>

                <div >
                    <p class="text-2xl font-bold">New Users</p>
                    <div class="flex  space-x-10 mt-3">
                        <div>
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cGVyc29ufGVufDB8fDB8fA%3D%3D&w=1000&q=80" class="object-cover p-[2px] w-14 h-14 rounded-full " alt="">
                            <p class=" text-xs text-gray-300 font-bold text-center">lanya</p>
                        </div>

                    </div>
                </div>



                <div >
                    <p class="text-2xl font-bold">Top Photographers</p>
                    <div class="grid grid-cols-3  gap-10 mt-3">
                        <div class="p-3 w-9/12 shadow rounded-xl">
                            <div class="flex justify-center relative space-x-3 pb-16">
                                <img src="https://wallpaperfordesktop.com/wp-content/uploads/2022/03/Street-Wallpaper-1024x576.jpg" class="w-24  h-24 object-cover rounded-2xl" alt="">
                                <img src="https://wallpaperaccess.com/full/6497051.jpg" class="w-24  h-24 object-cover rounded-2xl" alt="">
                                <div class="absolute bottom-4">
                                    <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cGVyc29ufGVufDB8fDB8fA%3D%3D&w=1000&q=80" class="object-cover p-[2px] w-16 h-16 rounded-full bg-white" alt="">
                                    <p class=" text-xl text-black font-bold text-center">lanya</p>
                                    <p class=" text-sm text-gray-400 font-bold text-center">hawler</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div >
                    <p class="text-2xl font-bold">Your Feed</p>
                    <div class="mt-4">
                        <div class="flex items-center space-x-4">
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cGVyc29ufGVufDB8fDB8fA%3D%3D&w=1000&q=80" class="object-cover p-[2px] w-16 h-16 rounded-full bg-white" alt="">
                            <div>
                                <p>Lanya</p>
                                <p class="text-sm text-gray-400">2 min ago</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-10 mt-3">
                            <img src="https://wallpaperfordesktop.com/wp-content/uploads/2022/03/Street-Wallpaper-1024x576.jpg" class="w-full h-72 object-cover rounded-2xl" alt="">
                            <img src="https://wallpaperaccess.com/full/6497051.jpg" class="w-full h-72 object-cover rounded-2xl" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </body>
</html>
