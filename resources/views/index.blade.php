@extends('layouts.public')

@section('content')

<div class="p-10 space-y-10">
    <div class="rounded-full p-3 bg-[#f6f7f8] flex w-5/12">
        <button><i class="fas fa-search"></i></button>
        <input type="text" class="bg-transparent focus:outline-none px-3 w-11/12">
    </div>

    <div >
        <p class="text-2xl font-bold">New Users</p>
        <div class="flex  space-x-10 mt-3">
           @foreach ($newUser as $row)
                <div>
                    <img src="{{ $row->avatar != null ? asset('coverimage/'.$row->avatar): 'https://ionicframework.com/docs/demos/api/avatar/avatar.svg' }}" class="object-cover p-[2px] mx-auto w-14 h-14 rounded-full " alt="">
                    <p class=" text-xs text-gray-500 uppercase font-bold text-center">{{ $row->name }}</p>
                </div>
           @endforeach
        </div>
    </div>



    <div >
        <p class="text-2xl font-bold">Top Photographers</p>
        <div class="grid grid-cols-3  gap-10 mt-3">
            @foreach ($topPhotographer as $row)
                <div class="p-3 w-full 2xl:w-9/12 shadow rounded-xl">
                    <div class="flex  justify-center relative space-x-3 pb-16">
                        @if (count($row->posts) > 0)
                            @foreach ($row->posts as $row2)
                                <img src="{{ asset('postimage/'.$row2->image[0]) }}" class="w-24  h-24 xl:w-5/12 xl:h-40 object-cover rounded-2xl" alt="">
                            @endforeach
                        @else
                            <div class="w-24  h-24 xl:w-5/12 xl:h-40 object-cover rounded-2xl bg-gray-400"></div>
                            <div class="w-24  h-24 xl:w-5/12 xl:h-40 object-cover rounded-2xl bg-gray-400"></div>
                        @endif

                        @if (count($row->posts) == 1)
                            <div class="w-24  h-24 xl:w-5/12 xl:h-40 object-cover rounded-2xl bg-gray-400"></div>
                        @endif

                        <div onclick="showSide()"  class="absolute -bottom-1">
                            <img  src="{{ $row->avatar != null ? asset('coverimage/'.$row->avatar): 'https://ionicframework.com/docs/demos/api/avatar/avatar.svg' }}" class="object-cover p-[2px] w-16 h-16 mx-auto rounded-full bg-white" alt="">
                            <p class=" text-xl text-black font-bold text-center">{{ $row->name }}</p>
                            <p class=" text-sm text-gray-400 font-bold text-center">{{ $row->location }}</p>
                            <p class=" text-xs text-gray-300 font-bold text-center">Post: {{ $row->posts_count }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    {{-- <div >
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

    </div> --}}
</div>
@endsection
