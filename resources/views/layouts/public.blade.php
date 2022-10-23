<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Laravel</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.1.3/axios.min.js" integrity="sha512-0qU9M9jfqPw6FKkPafM3gy2CBAvUWnYVOfNPDYKVuRTel1PrciTj+a9P3loJB+j0QmN2Y0JYQmkBBS8W+mbezg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        @vite('resources/css/app.css')

    </head>
    <body class="bg-[#090420] overflow-hidden">
        <div class="flex h-[100vh] items-center px-3 flex-wrap overflow-hidden">
            <div class="py-14 h-[97vh] p-2 w-1/12 text-gray-500 text-xl text-center flex flex-col justify-between">
                <a href="">Logo</a>
                <div class="grid grid-cols-1 gap-10">
                    <a href="{{ route('index') }}" class="{{ Route::currentRouteName() == 'index'? 'activeMenu':'' }}"><i class="fas fa-home"></i></a>
                    <a href="" class=""><i class="fas fa-bell"></i></a>
                    <a href="" class=""><i class="fas fa-plus"></i></a>
                    <a href="" class=""><i class="fas fa-heart"></i></a>
                    @guest
                        <a href="{{ route('login') }}" class=""><i class="fas fa-user"></i></a>
                    @endguest

                    @auth
                        <a href="{{ route('home') }}" class="{{ Route::currentRouteName() == 'home'? 'activeMenu':'' }}"><i class="fas fa-user"></i></a>
                    @endauth
                </div>
                @auth
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class=" border-t-2 w-14 mx-auto border-gray-100/10 pt-6"><i class="fas fa-power-off"></i></button>
                    </form>
                @endauth
                @guest
                    <a href="{{ route('login') }}" class="{{ Route::currentRouteName() == 'login'? 'text-white':'' }} border-t-2 w-14 mx-auto border-gray-100/10 pt-6">
                        <i class="fas fa-sign-in"></i>
                    </a>
                @endguest
            </div>
            <div id="mainContent" class="bg-white justify-between  rounded-3xl overflow-hidden h-[97vh]  w-11/12">

                {{-- left side --}}
                <div id="leftside" class="w-full  overflow-y-scroll h-screen">
                   @yield('content')
                </div>

                {{-- right side --}}
                <div id="rightside" class="w-5/12 h-[100vh] overflow-hidden  bg-[#090420] rounded-tl-[40px]" style="box-shadow:-5px 0px 6px 1px rgba(0, 0, 0, 0.226)">
                    <div class="text-right p-4">
                        <button onclick="hideSide()" class="text-white"><i class="fas text-3xl fa-times"></i></button>
                    </div>

                    <div id="userinfo">

                    </div>


                </div>
            </div>
        </div>
    </body>

    <script>
        let checkFollow = false;
        const showSide = (id) =>{
            axios.get('/getuser/'+id).then(({data})=>{
                checkFollow = data.check? true: false;
                let img = data.user.avatar? '/coverimage/'+data.user.avatar : 'https://ionicframework.com/docs/demos/api/avatar/avatar.svg'
                let content = '<div class="lg:p-5 2xl:p-14 text-white">'
                                +'<div class="flex items-center space-x-6 ">'
                                    +'<img src="'+img+'" class="object-cover p-[2px] w-20 h-20 rounded-full bg-white" alt="">'
                                    +'<div>'
                                        +'<p class="text-3xl font-bold">'+data.user.name+'</p>'
                                        +'<div class="text-sm text-gray-400 mt-2 space-x-2">'
                                            +'<i class="fas fa-location"></i> <span>'+data.user.location+'</span>'
                                        +'</div>'
                                    +'</div>'
                               +' </div>'
                           +' </div>'
                            +'<div class="grid px-3 text-white grid-cols-3 gap-5 text-center">'
                                +'<div>'
                                   +' <p class="text-2xl font-bold" id="followrs_count">'+data.user.followers_count+'</p>'
                                    +'<span class="text-sm text-gray-400">Followers</span>'
                               +' </div>'

                                +'<div>'
                                    +'<p class="text-2xl font-bold">'+data.user.following_count+'</p>'
                                    +'<span class="text-sm text-gray-400">Following</span>'
                               +' </div>'

                                @auth
                                    if(data.user.id != {{auth()->id()}}){
                                        content+='<div><button id="followbtn" onclick="sendFollow('+data.user.id+')" class="px-6 py-1 mt-2 text-white font-bold rounded-full bg-gradient-to-r from-blue-500 via-indigo-500 to-purple-500">'+(data.check ? 'unfollow' :'follow')+'</button></div>'
                                    }

                                @endauth

                            content+='</div>'

                //categories
                content+= '<div class="grid w-10/12 mx-auto px-2 mt-10 text-white grid-cols-3 2xl:grid-cols-5 gap-1 text-xs  text-center">'

                data.user.categories.forEach(element => {
                    content+='<div> <button class="px-6 py-1 mt-2 text-gray-300  rounded-full border border-gray-800">'+element.name+'</button> </div>'
                });

                content+='</div>'

                //posts

                let posts = '<div class="h-[64vh] rounded-tl-3xl rounded-tr-3xl rounded-br-[45px] p-3 2xl:p-10 overflow-y-scroll bg-white mt-10">'
                                +'<p class="text-2xl font-bold mb-3 2xl:mb-10">Photos</p>    <div class="grid grid-cols-2 gap-5">'



                if(data.user.posts.length > 0){
                    data.user.posts.forEach((element, index) => {
                        posts+='<img src="/postimage/'+element.image[0]+'" class="object-cover w-full  '+(index==0?'col-span-2':'')+' rounded-xl" alt="">'
                    });

                    posts+= '</div> </div>'

                    content+=posts
                }else{
                    content+='<p class="text-xl text-center text-white mt-10">0 post</p>'
                }

                document.getElementById('userinfo').innerHTML = content;


                document.getElementById('mainContent').classList.add('flex')
            })
        }

        const hideSide = () =>{
            document.getElementById('mainContent').classList.remove('flex')
        }


        let sendFollow= (id)=>{
            console.log(checkFollow)
            axios.post('/send/follow/'+id).then(()=>{
              let count =   document.getElementById('followrs_count')
                if(checkFollow){
                    document.getElementById('followbtn').innerHTML="follow"
                    count.innerHTML -= 1
                    checkFollow = false;
                }else{
                   document.getElementById('followbtn').innerHTML="unfollow"
                   count.innerHTML = 1 + +count.innerHTML
                   checkFollow = true;
                }
            })
        }
    </script>
</html>
