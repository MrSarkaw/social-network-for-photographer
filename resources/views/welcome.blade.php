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
            <div id="mainContent" class="bg-white justify-between  rounded-3xl overflow-hidden h-[97vh]  w-11/12">

                {{-- left side --}}
                <div id="leftside" class="w-full p-10 space-y-10 overflow-y-scroll h-screen">
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
                            <div class="p-3 w-full 2xl:w-9/12 shadow rounded-xl">
                                <div class="flex  justify-center relative space-x-3 pb-16">
                                    <img src="https://wallpaperfordesktop.com/wp-content/uploads/2022/03/Street-Wallpaper-1024x576.jpg" class="w-24  h-24 xl:w-5/12 xl:h-40 object-cover rounded-2xl" alt="">
                                    <img src="https://wallpaperaccess.com/full/6497051.jpg" class="w-24  h-24  xl:w-5/12  xl:h-40 object-cover rounded-2xl" alt="">
                                    <div onclick="showSide()"  class="absolute bottom-4">
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
                                <img src="https://wallpaperfordesktop.com/wp-content/uploads/2022/03/Street-Wallpaper-1024x576.jpg" class="w-full h-72 xl:h-[400px] object-cover rounded-2xl" alt="">
                                <img src="https://wallpaperaccess.com/full/6497051.jpg" class="w-full h-72 xl:h-[400px] object-cover rounded-2xl" alt="">
                            </div>
                        </div>

                    </div>
                </div>

                {{-- right side --}}
                <div id="rightside" class="w-5/12 h-[100vh] overflow-hidden  bg-[#090420] rounded-tl-[40px]" style="box-shadow:-5px 0px 6px 1px rgba(0, 0, 0, 0.226)">
                    <div class="text-right p-4">
                        <button onclick="hideSide()" class="text-white"><i class="fas text-3xl fa-times"></i></button>
                    </div>
                    <div class="lg:p-5 2xl:p-14 text-white">
                        <div class="flex items-center space-x-6 ">
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cGVyc29ufGVufDB8fDB8fA%3D%3D&w=1000&q=80" class="object-cover p-[2px] w-20 h-20 rounded-full bg-white" alt="">
                            <div>
                                <p class="text-3xl font-bold">Lanya</p>
                                <div class="text-sm text-gray-400 mt-2 space-x-2">
                                    <i class="fas fa-location"></i> <span>New Youk, USA</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid px-3 text-white grid-cols-3 gap-5 text-center">
                        <div>
                            <p class="text-2xl font-bold">17k</p>
                            <span class="text-sm text-gray-400">Followers</span>
                        </div>

                        <div>
                            <p class="text-2xl font-bold">321</p>
                            <span class="text-sm text-gray-400">Following</span>
                        </div>

                        <div>
                           <button class="px-6 py-1 mt-2 text-white font-bold rounded-full bg-gradient-to-r from-blue-500 via-indigo-500 to-purple-500">Follow</button>
                        </div>
                    </div>
                    <div class="grid w-10/12 mx-auto px-2 mt-10 text-white grid-cols-3 2xl:grid-cols-5 gap-1 text-xs  text-center">
                        <div>
                           <button class="px-6 py-1 mt-2 text-gray-300  rounded-full border border-gray-800">Follow</button>
                        </div>
                        <div>
                            <button class="px-6 py-1 mt-2 text-gray-300  rounded-full border border-gray-800">Follow</button>
                         </div>
                         <div>
                            <button class="px-6 py-1 mt-2 text-gray-300  rounded-full border border-gray-800">Follow</button>
                         </div>
                         <div>
                            <button class="px-6 py-1 mt-2 text-gray-300  rounded-full border border-gray-800">Follow</button>
                         </div>
                         <div>
                            <button class="px-6 py-1 mt-2 text-gray-300  rounded-full border border-gray-800">Follow</button>
                         </div>
                    </div>

                    <div class="h-[64vh] rounded-tl-3xl rounded-tr-3xl rounded-br-[45px] p-3 2xl:p-10 overflow-y-scroll bg-white mt-10">
                        <p class="text-2xl font-bold mb-3 2xl:mb-10">Photos</p>
                        <div class="grid grid-cols-2 gap-5">
                            <div class="first:row-span-2 h-24">
                                <img src="https://wallpaperaccess.com/full/6497051.jpg" class="object-cover  rounded-xl" alt="">
                            </div>
                            <img src="https://wallpaperaccess.com/full/6497051.jpg" class="object-cover rounded-xl" alt="">
                            <img src="https://wallpaperaccess.com/full/6497051.jpg" class="object-cover rounded-xl" alt="">
                            <img src="https://wallpaperaccess.com/full/6497051.jpg" class="object-cover rounded-xl" alt="">
                            <img src="https://wallpaperaccess.com/full/6497051.jpg" class="object-cover rounded-xl" alt="">
                            <img src="https://wallpaperaccess.com/full/6497051.jpg" class="object-cover rounded-xl" alt="">
                            <img src="https://wallpaperaccess.com/full/6497051.jpg" class="object-cover rounded-xl" alt="">
                            <img src="https://wallpaperaccess.com/full/6497051.jpg" class="object-cover rounded-xl" alt="">
                            <img src="https://wallpaperaccess.com/full/6497051.jpg" class="object-cover rounded-xl" alt="">
                            <img src="https://wallpaperaccess.com/full/6497051.jpg" class="object-cover rounded-xl" alt="">
                            <img src="https://wallpaperaccess.com/full/6497051.jpg" class="object-cover rounded-xl" alt="">
                            <img src="https://wallpaperaccess.com/full/6497051.jpg" class="object-cover rounded-xl" alt="">
                            <img src="https://wallpaperaccess.com/full/6497051.jpg" class="object-cover rounded-xl" alt="">
                            <img src="https://wallpaperaccess.com/full/6497051.jpg" class="object-cover rounded-xl" alt="">
                            <img src="https://wallpaperaccess.com/full/6497051.jpg" class="object-cover rounded-xl" alt="">
                            <img src="https://wallpaperaccess.com/full/6497051.jpg" class="object-cover rounded-xl" alt="">
                            <img src="https://wallpaperaccess.com/full/6497051.jpg" class="object-cover rounded-xl" alt="">
                            <img src="https://wallpaperaccess.com/full/6497051.jpg" class="object-cover rounded-xl" alt="">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <script>
        const showSide = () =>{
            document.getElementById('mainContent').classList.add('flex')
            document.getElementById('leftSide').classList.add('w-7/12')
            document.getElementById('leftSide').classList.remove('w-full')
        }

        const hideSide = () =>{
            document.getElementById('mainContent').classList.remove('flex')
            document.getElementById('leftSide').classList.remove('w-7/12')
            document.getElementById('leftSide').classList.add('w-full')
        }
    </script>
</html>
