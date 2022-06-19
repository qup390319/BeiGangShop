<!DOCTYPE html>
<html>
<head>
    <!-- <script src="https://unpkg.com/tailwindcss-jit-cdn"></script> -->
    <script src="https://cdn.tailwindcss.com"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>

    <title>北港美食大補帖管理員</title>
</head>
<body>


<div>
    <!-- mobile menu bar -->
    <div class="bg-gray-800 text-gray-100 flex justify-between md:hidden">
        <!-- logo -->
        <a href="" class="block p-4 text-white font-bold">美食大補帖</a>

        <!-- mobile menu button -->
        <button class="mobile-menu-button p-4 focus:outilne-none focus:bg-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>

    </div>

    <!-- side bar -->
    {{--    <div>--}}
    {{--        <div class='sm:hidden md:block'>hi</div>--}}
    {{--    </div>--}}

    <div class="sidebar bg-teal-900 text-blue-100 w-3/5  md:w-full md:flex space-y-6 md:px-1 px-2 md:px-10 py-7 absolute inset-y-0 left-0 transform
-translate-x-full transition duration-200 ease-in-out md:relative md:translate-x-0">
        <!-- logo -->

        <!-- nav -->
        <nav class="w-full flex grid justify-between lg:ml-3 md:ml-0 md:flex">
            <div class="lg:flex">
                <a href="{{route('get_notiHome_page')}}"
                   class="w-24 mb-3 lg:flex block py-2 px-3 rounded lg:text-xl md:text-sm hover:bg-teal-700 hover:text-white">
                    首頁
                </a>
                <a href="{{route('get_storeHome_page')}}"
                       class="w-32 mb-3 lg:flex block py-2 px-3 rounded lg:text-xl md:text-sm hover:bg-teal-700 hover:text-white">
                    店家管理
                </a>
            </div>
            <div class="flex">
                <a href="{{route('get_login_page')}}"
                   class="mb-3 flex block py-2 px-3 rounded grid lg:text-xl md:text-sm md:justify-end hover:bg-teal-700 hover:text-white">
                    登出
                </a>
            </div>

        </nav>

    </div>
</div>

<!-- content -->
<div class="mx-10 my-5">
    <!-- 店家總數 -->
<div class="flex w-full justify-between">
    <div>
        <div>
            店家總數
        </div>
        <div class="bg-gray-100 w-32 h-20 flex justify-center">
            <div class="text-6xl grid content-center">
                {{$quantity}}
            </div>
        </div>
    </div>
    <div>
        <div>
            <img class="h-48" src="{{asset('images/person.png')}}">
        </div>
    </div>
</div>

    <!-- /店家總數 -->

    <!-- 近期通知 -->
    <div>
        <div class="mt-6">
            <p>
                近期通知
            </p>
        </div>
        <div class="flex-grow border-t border-gray-400 my-2"></div>
        <!-- 表格 -->
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <div class="w-full ">
                            <div class="bg-white">
                                <div class="flex grid grid-cols-5">
                                    <div scope="col" class="text-sm font-medium text-gray-900 px-2 py-2 text-left">
                                        類別
                                    </div>
                                    <div scope="col" class="text-sm font-medium text-gray-900 px-2 py-2 text-left">
                                        摘要
                                    </div>
                                    <div scope="col" class="text-sm font-medium text-gray-900 px-2 py-2 text-left">
                                        時間
                                    </div>
                                    <div scope="col" class="text-sm font-medium text-gray-900 px-2 py-2 text-left">
                                        聯絡人信箱
                                    </div>
                                    <div scope="col" class="text-sm font-medium text-gray-900 px-2 py-2 text-left">
                                        進度
                                    </div>
                                </div>
                            </div>
                            <div id="t-noti" class="">
                                {{--單行--}}
                                @foreach($data as $key=>$row)
                                    <div class="flex bg-gray-100 border-b grid grid-cols-5 w-full mb-1"
                                         onclick="window.location.href=`{{route('get_notiDetail_page')}}?noti_id={{$row->noti_id}}`">
                                        <div class=" truncate text-sm text-gray-900 font-light px-2 py-2 ">
                                            {{$row->noti_category}}
                                        </div>
                                        <div
                                            class="truncate text-sm text-gray-900 font-light px-2 py-2 ">
                                            {{$row->noti_detail}}
                                        </div>
                                        <div class="truncate text-sm text-gray-900 font-light px-2 py-2 ">
                                            {{$row->noti_time}}
                                        </div>
                                        <div class="truncate text-sm text-gray-900 font-light px-2 py-2 ">
                                            {{$row->noti_sender_mail}}
                                        </div>
                                        <div class="text-sm text-gray-900 font-light px-2 py-2">
                                            {{$row->noti_state}}
                                        </div>
                                    </div>
                                @endforeach
                                {{--/單行--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /表格 -->
    </div>
    <!-- /近期通知 -->
</div>
</body>
<script>
    //grab everything we need
    const btn = document.querySelector('.mobile-menu-button');
    const sidebar = document.querySelector('.sidebar');
    //add our event listener for the click
    btn.addEventListener('click', () => {
        sidebar.classList.toggle('-translate-x-full');
    })

</script>
</html>
