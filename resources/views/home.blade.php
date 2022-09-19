@extends('layouts.public')

@section('content')
    <div class="w-full bg-gray-500 h-48"></div>
    <img src="" class="w-32 mx-auto -mt-[75px] h-32 rounded-full bg-red-500" alt="">
    <div class="w-5/12 mx-auto text-center pt-3">
        <p class="text-xl font-bold">Sarkaw Salar</p>
        <p class="text-sm text-gray-400">iraq</p>
        <p class="text-xs text-gray-600 mt-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero necessitatibus minima reprehenderit deserunt obcaecati assumenda optio laboriosam? Ab neque distinctio minus quo eligendi, animi cumque aspernatur, ullam, voluptatibus ad eveniet.</p>
    </div>

    <div class="flex mt-12 items-center justify-between w-10/12 mx-auto">
        <div class="space-x-14 font-bold flex items-center justify-between">
            <div class="text-center">
                <p class="text-sm">20</p>
                <p class="text-xs text-gray-500">Posts</p>
            </div>
            <div class="text-center">
                <p class="text-sm">20</p>
                <p class="text-xs text-gray-500">Followers</p>
            </div>
            <div class="text-center">
                <p class="text-sm">20</p>
                <p class="text-xs text-gray-500">Following</p>
            </div>
        </div>

        <div>
            <button class="px-4 py-2 rounded bg-indigo-500 text-white">
                <i class="fas fa-cog"></i>
            </button>
        </div>
    </div>

    <div class="bg-gray-200 py-2 mt-4">
        <div class=" w-10/12 mx-auto flex-wrap  px-2 text-white flex space-x-3  text-xs  text-center">
            <div>
                <button class="px-6 py-1 mt-2 text-white bg-green-700 border border-green-700  rounded ">Add <i class="fas fa-plus"></i></button>
             </div>
            <div>
               <button class="px-6 py-1 mt-2 text-gray-800  rounded border border-gray-800">Follow</button>
            </div>
            <div>
                <button class="px-6 py-1 mt-2 text-gray-800  rounded border border-gray-800">Follow</button>
             </div>
             <div>
                <button class="px-6 py-1 mt-2 text-gray-800  rounded border border-gray-800">Follow</button>
             </div>
             <div>
                <button class="px-6 py-1 mt-2 text-gray-800  rounded border border-gray-800">Follow</button>
             </div>
             <div>
                <button class="px-6 py-1 mt-2 text-gray-800  rounded border border-gray-800">Follow</button>
             </div>


        </div>

        <div class="g p-2 mt-10 pb-20 space-y-4">
            <div class="w-5/12 bg-white mx-auto shadow rounded-xl p-2 ">
                <div class="flex items-center justify-between space-x-4">
                    <div class="flex items-center space-x-4">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cGVyc29ufGVufDB8fDB8fA%3D%3D&w=1000&q=80" class="object-cover p-[2px] w-16 h-16 rounded-full bg-white" alt="">
                        <div>
                            <p>Lanya</p>
                            <p class="text-sm text-gray-400">2 min ago</p>
                        </div>
                    </div>
                    <button><i class="fa-solid fa-ellipsis-vertical"></i></button>
                </div>
                <p class="text-sm m-2 my-4">title</p>
                <img src="https://wallpaperaccess.com/full/6497051.jpg" class="object-cover rounded-xl" alt="">
            </div>
        </div>
    </div>
@endsection
