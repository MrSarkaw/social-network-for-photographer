@extends('layouts.public')

@section('content')
    <div class="w-full bg-gray-500 relative h-48">
        <form id="form1" action="{{ route('update.cover') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <input onchange="formsubmit('form1')" type="file" name="file" class="absolute bottom-10 left-10">
        </form>
        @if($user->cover)
        <img src="{{ asset("coverimage/".$user->cover) }}" class="w-full h-full object-cover" alt="">
        @else
        <img src="http://wallpapers.net/web/wallpapers/reflection-of-neon-lights-at-street-hd-wallpaper/2560x1440.jpeg" class="w-full h-full object-cover" alt="">
        @endif
    </div>

    <div class="relative">
        @if($user->avatar)
        <img src="{{ asset("coverimage/".$user->avatar) }}" class="w-32 mx-auto relative -top-[75px] h-32 rounded-full bg-red-500" alt="">
        @else
        <img src="https://static.vecteezy.com/system/resources/previews/003/420/257/non_2x/unknown-person-icon-vector.jpg" class="w-32 mx-auto relative -top-[75px] h-32 rounded-full bg-red-500" alt="">
        @endif
        <form id="form2" action="{{ route('update.cover') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <input type="hidden" name="profile" value="profile">
            <input onchange="formsubmit('form2')" type="file" name="file" class="absolute text-xs bottom-20 left-10" style="left:45%; transform:translateX(-45%)">
        </form>
    </div>

    <div class="w-5/12 -top-20 relative mx-auto text-center pt-3">
        <p class="text-xl font-bold">{{ $user->name }}</p>
        <p class="text-sm text-gray-400">{{$user->location}}</p>
        <p class="text-xs text-gray-600 mt-4">{{ $user->bio }}</p>
    </div>

    <div class="flex  items-center justify-between w-10/12 mx-auto">
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
            <button onclick="toggleModal()" class="px-4 py-2 rounded bg-indigo-500 text-white">
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


    <div id="modal" class="absolute hidden flex items-center justify-center z-50 bg-white w-full h-screen top-0 left-0">
        <div >
            <button class="text-xl" onclick="toggleModal()">X</button>
            <form class="space-y-5"  method="POST" action="{{ route('update.profile') }}">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-2 gap-4">

                    <div class="space-y-2">
                        <p>Email</p>
                        <input type="text" name="email" class="loginform" placeholder="example@gmail.com" value="{{ $user->email }}">
                        @error('email')
                            <span class="text-xs text-red-500" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="space-y-2">
                        <p>name</p>
                        <input type="text" name="name" class="loginform" placeholder="example" value="{{ $user->name }}">
                        @error('name')
                            <span class="text-xs text-red-500" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="space-y-2">
                        <p>Password</p>
                        <input type="password" name="password" class="loginform" placeholder="*******">

                        @error('password')
                            <span class="text-xs text-red-500" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="space-y-2">
                        <p>Confirmation Password</p>
                        <input type="password" name="confirmation_password" class="loginform" placeholder="*******">

                        @error('password')
                            <span class="text-xs text-red-500" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="space-y-2">
                        <p>Location</p>
                        <input type="text" name="location" class="loginform" placeholder="example" value="{{ $user->location }}">
                        @error('name')
                            <span class="text-xs text-red-500" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                </div>
                <div class="space-y-2">
                    <p>bio</p>
                   <textarea name="bio"  class="loginform w-full" rows="4">{{ $user->bio }}</textarea>
                    @error('name')
                        <span class="text-xs text-red-500" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                    <button class="px-10 py-2 rounded-lg border-2 hover:bg-indigo-900 hover:text-white border-indigo-900">Update</button>

                </form>
        </div>
    </div>

    <script>
        const formsubmit = (id)=>{
            document.getElementById(id).submit();
        }

        const toggleModal = ()=>{
            document.getElementById('modal').classList.toggle('hidden');
        }
    </script>
@endsection
