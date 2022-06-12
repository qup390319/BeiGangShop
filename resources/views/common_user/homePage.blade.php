<!DOCTYPE html>
<head>
    <!-- <script src="https://unpkg.com/tailwindcss-jit-cdn"></script> -->
    <script src="https://cdn.tailwindcss.com"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
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

    <!-- 地圖 -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"
          integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
          crossorigin="" />
    <style>
        #map {
            width: 100%;
            height: 100%;
        }
        .kv.mt {
            background-size: cover;
            height: 670px;
            opacity: 0.4;
            background-image: url({{asset('images/banner.jpg')}});
            background-position: center top;
            background-repeat: no-repeat;
        }
    </style>

    <link rel="stylesheet" href="./style.css" />
    <title>北港美食大補帖</title>
</head>

<body>
<!-- navbar -->
<nav class="
  relative
  w-full
  h-20
  flex flex-wrap
  items-center
  justify-between
  py-1
  bg-gray-50
  text-gray-500
  hover:text-gray-700
  focus:text-gray-700
  shadow-lg
  navbar navbar-expand-lg navbar-light
  ">
    <div class="container-fluid w-full h-full flex flex-wrap items-center justify-between px-6">
        <button class="
      navbar-toggler
      text-gray-500
      border-0
      hover:shadow-none hover:no-underline
      py-2
      px-2.5
      bg-transparent
      focus:outline-none focus:ring-0 focus:shadow-none focus:no-underline
    " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" class="w-6" role="img"
                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path fill="currentColor"
                      d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z">
                </path>
            </svg>
        </button>
        <div class="collapse navbar-collapse h-full flex-grow items-center  px-20" id="navbarSupportedContent">
            <div>
                <a class="
        flex
        items-center
        text-gray-900
        hover:text-gray-900
        focus:text-gray-900
        mt-2
        lg:mt-0
        mr-1
      " href="#">
                    <img src="{{asset('images/Logo.png')}}" style="height: 60px" alt="" loading="lazy" />
                </a>
            </div>
            <div class="flex justify-around w-full text-xl font-bold px-10">
                <div>
                    <a class="nav-link text-gray-500 hover:text-gray-700 focus:text-gray-700 p-0" href="#">首頁</a>
                </div>
                <div>
                    <a class="nav-link text-gray-500 hover:text-gray-700 focus:text-gray-700 p-0" href="#">搜尋店家</a>
                </div>
                <div>
                    <a class="nav-link text-gray-500 hover:text-gray-700 focus:text-gray-700 p-0" href="#">店家地圖</a>
                </div>
                <div>
                    <a class="nav-link text-gray-500 hover:text-gray-700 focus:text-gray-700 p-0" href="#">店家推薦</a>
                </div>
                <div>
                    <a class="nav-link text-gray-500 hover:text-gray-700 focus:text-gray-700 p-0" href="#">問題回報</a>
                </div>
            </div>


            <!-- Left links -->

            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->

    </div>
</nav>
<!-- banner -->
<div class="relative h-full ">
    <div class="kv mt">
        <!-- <img src="banner.jpg" class="opacity-40 " /> -->

    </div>
    <!-- card -->
    <div class="absolute top-20 inset-x-60 h-3/4 flex ">
        <div class="flex w-full rounded-lg bg-white shadow-lg">
            <div class="p-20 flex flex-col grid content-between  w-full">
                <h5 class="text-gray-900 font-bold text-6xl mb-2">北港美食大補帖</h5>
                <p class="text-gray-700 text-base mt-10">
                    Learn how design thinking, user research,
                    business vision and marketing, and finally designing
                    and creating real digital products for real users.
                </p>
                <button type="button"
                        class=" w-64 h-12 mt-10 inline-block px-6 py-1 bg-orange-600 text-white font-bold text-xl leading-tight uppercase rounded-xl shadow-md hover:bg-orange-700 hover:shadow-lg active:bg-orange-800 active:shadow-lg transition duration-150 ease-in-out">開始瀏覽</button>
            </div>
            <img class=" w-64 h-64 ml-10 my-10 mr-20 md:h-auto object-cover " src="{{asset('images/bannerDM.png')}}" alt="" />

        </div>
    </div>

</div>

<!-- <a class="hidden sm:block">sm</a>
<a class="hidden md:block">md</a>
<a class="hidden lg:block">lg</a>
<a class="hidden xl:block">xl</a>
<a class="hidden 2xl:block">2xl</a> -->


<!-- 熱門餐廳 -->
<div class="  bg-orange-400  flex w-full mt-7 ">
    <div class=" w-1/4 grid justify-items-center bg-gray-100 hidden xl:block lg:hidden">
        <div class=" grid place-content-center w-full ">
            <div class="relative w-64  top-64 ">
                <div class="absolute -top-10 -left-10 ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-gray-400 " fill="none"
                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5" />
                    </svg>
                </div>
                <div class="absolute w-64 ">
                    <div class="text-6xl ">
                        熱門
                    </div>
                    <div class="text-6xl">
                        　餐廳
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-3/4 bg-gray-50 grid justify-items-center">
        <div class=" w-full">
            <!-- 上排 -->
            <div class="flex items-center justify-end  bg-gray-50 w-full h-32">
                <!-- 下拉選單 -->
                <div class="">
                    <div class="">
                        <div>
                            <div class="dropdown relative">
                                <button class="
                                    dropdown-toggle
                                    px-6
                                    py-2.5
                                    bg-white
                                    text-gray-500
                                    font-medium
                                    text-xs
                                    leading-tight
                                    uppercase
                                    rounded
                                    border
                                    border-gray-400
                                    shadow-md
                                    hover:bg-gray-400 hover:shadow-lg
                                    focus:bg-gray-400 focus:shadow-lg focus:outline-none focus:ring-0
                                    active:bg-gray-400 active:shadow-lg active:text-white
                                    transition
                                    duration-150
                                    ease-in-out
                                    flex
                                    items-center
                                    whitespace-nowrap
                                  " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    地區
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                         data-icon="caret-down" class="w-2 ml-2" role="img"
                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                        <path fill="currentColor"
                                              d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z">
                                        </path>
                                    </svg>
                                </button>
                                <ul class="
                                    dropdown-menu
                                    min-w-max
                                    absolute
                                    hidden
                                    bg-white
                                    text-base
                                    z-50
                                    float-left
                                    py-2
                                    list-none
                                    text-left
                                    rounded-lg
                                    shadow-lg
                                    mt-1
                                    hidden
                                    m-0
                                    bg-clip-padding
                                    border-none
                                  " aria-labelledby="dropdownMenuButton1">
                                    <li>
                                        <a class="
                                        dropdown-item
                                        text-sm
                                        py-2
                                        px-4
                                        font-normal
                                        block
                                        w-full
                                        whitespace-nowrap
                                        bg-transparent
                                        text-gray-700
                                        hover:bg-gray-100
                                      " href="#">Action</a>
                                    </li>
                                    <li>
                                        <a class="
                                        dropdown-item
                                        text-sm
                                        py-2
                                        px-4
                                        font-normal
                                        block
                                        w-full
                                        whitespace-nowrap
                                        bg-transparent
                                        text-gray-700
                                        hover:bg-gray-100
                                      " href="#">Another action</a>
                                    </li>
                                    <li>
                                        <a class="
                                        dropdown-item
                                        text-sm
                                        py-2
                                        px-4
                                        font-normal
                                        block
                                        w-full
                                        whitespace-nowrap
                                        bg-transparent
                                        text-gray-700
                                        hover:bg-gray-100
                                      " href="#">Something else here</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 搜尋 -->

                <div class=" items-center xl:w-96 m-5">
                    <div class="input-group flex items-stretch ">
                        <input type="search"
                               class="form-control  relative flex-auto min-w-0 block px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                               placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                        <button
                            class="btn inline-block px-6 py-2.5 bg-white border
                                border-gray-400 text-gray-500 font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-gray-400 hover:shadow-lg focus:bg-gray-400  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-400 active:shadow-lg transition duration-150 ease-in-out flex items-center"
                            type="button" id="button-addon2">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search"
                                 class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="currentColor"
                                      d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <!-- card 下排 -->
            <div class="flex  w-full">
                <div class="rounded-lg shadow-lg bg-white max-w-sm m-5">
                    <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
                        <img class="rounded-t-lg object-cover h-48 w-96" style="width: 50rem" src="{{asset('images/kv_bg.jpg')}}"
                             alt="" />
                    </a>
                    <div class="px-6 pt-1">
                        <div class=" flex justify-end">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <p class="ml-2 mb-2"> 4.8</p>
                        </div>
                        <h5 class=" content-start text-gray-900 text-xl font-medium mb-2">加運包子店</h5>
                        <div class="mb-4 h-12 grid content-end">
                            <p class="text-gray-700 text-sm">
                                雲林縣北港鎮
                            </p>
                        </div>
                    </div>
                </div>
                <div class="rounded-lg shadow-lg bg-white max-w-sm m-5">
                    <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
                        <img class="rounded-t-lg object-cover h-48 w-96" style="width: 50rem" src="{{asset('images/kv_bg.jpg')}}"
                             alt="" />
                    </a>
                    <div class="px-6 pt-1">
                        <div class=" flex justify-end">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <p class="ml-2 mb-2"> 4.8</p>
                        </div>
                        <h5 class=" content-start text-gray-900 text-xl font-medium mb-2">加運包子店</h5>
                        <div class="mb-4 h-12 grid content-end">
                            <p class="text-gray-700 text-sm">
                                雲林縣北港鎮
                            </p>
                        </div>
                    </div>
                </div>
                <div class="rounded-lg shadow-lg bg-white max-w-sm m-5">
                    <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
                        <img class="rounded-t-lg object-cover h-48 w-96" style="width: 50rem" src="{{asset('images/kv_bg.jpg')}}"
                             alt="" />
                    </a>
                    <div class="px-6 pt-1">
                        <div class=" flex justify-end">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <p class="ml-2 mb-2"> 4.8</p>
                        </div>
                        <h5 class=" content-start text-gray-900 text-xl font-medium mb-2">加運包子店</h5>
                        <div class="mb-4 h-12 grid content-end">
                            <p class="text-gray-700 text-sm">
                                雲林縣北港鎮
                            </p>
                        </div>
                    </div>
                </div>
                <div class="rounded-lg shadow-lg bg-white max-w-sm m-5">
                    <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
                        <img class="rounded-t-lg object-cover h-48 w-96" style="width: 50rem" src="{{asset('images/kv_bg.jpg')}}"
                             alt="" />
                    </a>
                    <div class="px-6 pt-1">
                        <div class=" flex justify-end">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <p class="ml-2 mb-2"> 4.8</p>
                        </div>
                        <h5 class=" content-start text-gray-900 text-xl font-medium mb-2">加運包子店</h5>
                        <div class="mb-4 h-12 grid content-end">
                            <p class="text-gray-700 text-sm">
                                雲林縣北港鎮
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 w-full h-64 grid content-center flex justify-center">
                <div class="">
                    <nav aria-label="Page navigation example">
                        <div class="">
                            <div class="">
                                <ul class="flex list-style-none items-center">
                                    <li class=" page-item"><a
                                            class="page-link relative block py-1.5 px-3 rounded border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-800 hover:text-gray-800 focus:shadow-none"
                                            href="#" aria-label="Previous">
                                                <span aria-hidden="true">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         class="h-20 w-20 text-gray-300" fill="none" viewBox="0 0 24 24"
                                                         stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" />
                                                    </svg>
                                                </span>
                                        </a></li>
                                    <li class="page-item"><a
                                            class="page-link relative block py-1.5 px-3 rounded border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none"
                                            href="#">1</a></li>
                                    <li class="page-item"><a
                                            class="page-link relative block py-1.5 px-3 rounded border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none"
                                            href="#">2</a></li>
                                    <li class="page-item"><a
                                            class="page-link relative block py-1.5 px-3 rounded border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none"
                                            href="#">3</a></li>
                                    <li class="page-item"><a
                                            class="page-link relative block py-1.5 px-3 rounded border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none"
                                            href="#" aria-label="Next">
                                                <span aria-hidden="true">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         class="h-20 w-20 text-gray-400" fill="none" viewBox="0 0 24 24"
                                                         stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg></span>
                                        </a></li>
                                </ul>
                            </div>

                        </div>
                    </nav>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- 附近餐廳 -->
<div class="  bg-orange-400  flex w-full mt-7 ">

    <div class=" w-1/4 grid justify-items-center bg-gray-100 hidden xl:block lg:hidden">
        <div class=" grid place-content-center w-full ">
            <div class="relative w-64  top-64 ">
                <div class="absolute -top-10 -left-10 ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-gray-400 " fill="none"
                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5" />
                    </svg>
                </div>
                <div class="absolute w-64 ">
                    <div class="text-6xl ">
                        附近
                    </div>
                    <div class="text-6xl">
                        　餐廳
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-3/4 bg-gray-50 grid justify-items-center">
        <div class=" w-full">
            <!-- 上排 -->
            <div class="flex items-center justify-end  bg-gray-50 w-full h-32">
                <!-- 搜尋 -->
                <div class=" items-center xl:w-96 m-5">
                    <div class="input-group flex items-stretch ">
                        <input type="search"
                               class="form-control  relative flex-auto min-w-0 block px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                               placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                        <button
                            class="btn inline-block px-6 py-2.5 bg-white border
                                border-gray-400 text-gray-500 font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-gray-400 hover:shadow-lg focus:bg-gray-400  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-400 active:shadow-lg transition duration-150 ease-in-out flex items-center"
                            type="button" id="button-addon2">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search"
                                 class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="currentColor"
                                      d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <!-- card 下排 -->
            <div class="w-full">
                <!-- 交通工具btn -->
                <div class="">
                    <div class="flex items-center ml-5">
                        <div class="flex" role="group">
                            <button type="button"
                                    class="group mr-2 rounded-full px-4 py-1 bg-white border-2 border-blue-500 font-bold text-xs leading-tight uppercase hover:bg-blue-600 focus:bg-blue-700  focus:outline-none text-white focus:ring-0 text-white active:bg-blue-800	 transition duration-150 ease-in-out 	">
                                <h1 class="text-blue-500 group-hover:text-white group-focus:text-white">機車</h1>
                            </button>
                            <button type="button"
                                    class="group mr-2 rounded-full px-4 py-1 bg-white border-2 border-blue-500 font-bold text-xs leading-tight uppercase hover:bg-blue-600 focus:bg-blue-700  focus:outline-none text-white focus:ring-0 text-white active:bg-blue-800	 transition duration-150 ease-in-out 	">
                                <h1 class="text-blue-500 group-hover:text-white group-focus:text-white">走路</h1>
                            </button>
                            <button type="button"
                                    class="group mr-2 rounded-full px-4 py-1 bg-white border-2 border-blue-500 font-bold text-xs leading-tight uppercase hover:bg-blue-600 focus:bg-blue-700  focus:outline-none text-white focus:ring-0 text-white active:bg-blue-800	 transition duration-150 ease-in-out 	">
                                <h1 class="text-blue-500 group-hover:text-white group-focus:text-white">腳踏車</h1>
                            </button>
                            <button type="button"
                                    class="group mr-2 rounded-full px-4 py-1 bg-white border-2 border-blue-500 font-bold text-xs leading-tight uppercase hover:bg-blue-600 focus:bg-blue-700  focus:outline-none text-white focus:ring-0 text-white active:bg-blue-800	 transition duration-150 ease-in-out 	">
                                <h1 class="text-blue-500 group-hover:text-white group-focus:text-white">汽車</h1>
                            </button>
                            <button type="button"
                                    class="group mr-2 rounded-full px-4 py-1 bg-white border-2 border-blue-500 font-bold text-xs leading-tight uppercase hover:bg-blue-600 focus:bg-blue-700  focus:outline-none text-white focus:ring-0 text-white active:bg-blue-800	 transition duration-150 ease-in-out 	">
                                <h1 class="text-blue-500 group-hover:text-white group-focus:text-white">捷運</h1>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- 通勤時間 -->
                <div class="m-5 flex">
                    <div class="relative pt-1 w-1/4">
                        <label for="customRange3" class="form-label text-blue-600">5分鐘</label>
                        <input type="range" class="
                                form-range
                                appearance-none
                                w-full
                                h-6
                                p-0
                                bg-transparent
                                accent-pink-500
                                focus:outline-none focus:ring-0 focus:shadow-none
                              " min="5" max="60" step="5" id="customRange3" />
                    </div>
                    <div class="grid content-end">
                        <button type="button"
                                class="ml-5 inline-block px-5 py-2 border-2 border-orange-600 text-orange-600 font-medium text-xs leading-tight uppercase rounded hover:bg-orange-300 hover:bg-opacity-5 focus:outline-none focus:ring-0 active:bg-orange-600 transition duration-200 ease-in-out ">確定</button>
                    </div>
                </div>
                <!-- 地圖 -->
                <div class="h-96 w-3/4">
                    <div id="map"></div>
                </div>
            </div>


        </div>
    </div>
</div>

<!-- 店家推薦 -->
<div class="  bg-orange-400  flex w-full mt-7 ">

    <div class=" w-1/4 grid justify-items-center bg-gray-100 hidden xl:block lg:hidden">
        <div class=" grid place-content-center w-full ">
            <div class="relative w-64  top-64 ">
                <div class="absolute -top-10 -left-10 ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-gray-400 " fill="none"
                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5" />
                    </svg>
                </div>
                <div class="absolute w-64 ">
                    <div class="text-6xl ">
                        店家
                    </div>
                    <div class="text-6xl">
                        　推薦
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-3/4 bg-gray-50 grid justify-items-center">
        <div class="m-5	">
            <p class="text-center text-3xl font-bold">
                店家推薦、評價
            </p>
            <p class="text-center">
                分享好餐廳讓大家知道!
            </p>
        </div>
        <div class="flex mx-5 w-full	">
            <div class=" m-6 mb-10 flex justify-center  p-6 block  rounded-lg shadow-lg bg-white w-full mt-4">
                <form>
                    <div class="grid grid-cols-2 gap-24	">
                        <div class="">
                            <div class="form-group mb-6 w-72">
                                <label for=" storeName" class="form-label inline-block mb-2 text-gray-700">
                                    店家名稱</label>
                                <input type="text" class="form-control
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="storeName"
                                       placeholder="請填寫">
                            </div>
                            <div class="form-group mb-6">
                                <label for="storeAddress" class="form-label inline-block mb-2 text-gray-700">
                                    店家地址</label>
                                <input type="text" class="form-control
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="storeAddress"
                                       placeholder="請填寫">
                            </div>
                            <div class="form-group mb-6">
                                <label for="storePhone" class="form-label inline-block mb-2 text-gray-700">
                                    店家電話</label>
                                <input type="text" class="form-control
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="storePhone"
                                       placeholder="請填寫">
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group mb-6">
                                <label for="name" class="form-label inline-block mb-2 text-gray-700">
                                    姓名</label>
                                <input type="text" class="form-control
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="name"
                                       placeholder="">
                            </div>
                            <div class="form-group mb-6">
                                <label for="email" class="form-label inline-block mb-2 text-gray-700">
                                    Email</label>
                                <input type="email" class="form-control block
                              w-full
                              px-3
                              py-1.5
                              text-base
                              font-normal
                              text-gray-700
                              bg-white bg-clip-padding
                              border border-solid border-gray-300
                              rounded
                              transition
                              ease-in-out
                              m-0
                              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="email"
                                       placeholder="">
                            </div>
                            <div class="form-group mb-6">
                                <label for="opinion"
                                       class="form-label inline-block mb-2 text-gray-700">推薦、評價</label>
                                <textarea class="
            form-control
            block
            w-full
            px-3
            py-1.5
            text-base
            font-normal
            text-gray-700
            bg-white bg-clip-padding
            border border-solid border-gray-300
            rounded
            transition
            ease-in-out
            m-0
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
          " id="opinion" rows="5" placeholder="Your message"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-center">
                        <button type="submit" class="
                            w-32
                            px-6
                            py-2.5
                            bg-white
                            text-gray-700
                            font-medium
                            text-xs
                            leading-tight
                            uppercase
                            rounded
                            border
                            border-gray-400
                            shadow-md
                            hover:bg-gray-400 hover:shadow-lg
                            <focus:bg-gray-400></focus:bg-gray-400> focus:shadow-lg focus:outline-none focus:ring-0
                            active:bg-gray-500 active:shadow-lg
                            transition
                            duration-150
                            ease-in-out">送出</button>
                    </div>

                </form>
            </div>
        </div>
    </div>



</div>

<!-- 問題回報 -->
<div class="  bg-orange-400  flex w-full mt-7 ">
    <div class=" w-1/4 grid justify-items-center bg-gray-100 hidden xl:block lg:hidden">
        <div class=" grid place-content-center w-full ">
            <div class="relative w-64  top-64 ">
                <div class="absolute -top-10 -left-10 ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-gray-400 " fill="none"
                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5" />
                    </svg>
                </div>
                <div class="absolute w-64 ">
                    <div class="text-6xl ">
                        問題
                    </div>
                    <div class="text-6xl">
                        　回報
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-3/4 bg-gray-50 grid justify-items-center">

        <div class="flex mx-5 w-full	">
            <div
                class=" m-6 mb-10 flex justify-center content-center  p-6 block  rounded-lg shadow-lg bg-white w-full mt-4 grid grid-cols-2 gap-24">
                <div class=" grid content-center">
                    <form class="  mx-5 ">
                        <div class="">
                            <div class="">
                                <div class="text-2xl font-bold">
                                    您遭遇了什麼困難呢?
                                </div>
                                <div class="form-group mb-6">
                                    <label for="opinion" class="form-label inline-block mb-2 text-gray-700"></label>
                                    <textarea class="
                form-control
                block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
              " id="opinion" rows="5" placeholder="輸入問題"></textarea>
                                </div>
                                <div class="form-group mb-6">
                                    <label for="email" class="form-label inline-block mb-2 text-gray-700">
                                    </label>
                                    <input type="email" class="form-control block
                                  w-full
                                  px-3
                                  py-1.5
                                  text-base
                                  font-normal
                                  text-gray-700
                                  bg-white bg-clip-padding
                                  border border-solid border-gray-300
                                  rounded
                                  transition
                                  ease-in-out
                                  m-0
                                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                           id="email" placeholder="填入您的E-mail">
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-end">
                            <button type="submit" class="
                                w-20
                                px-6
                                py-2.5
                                bg-white
                                text-gray-700
                                font-medium
                                text-xs
                                leading-tight
                                uppercase
                                rounded
                                border
                                border-gray-400
                                shadow-md
                                hover:bg-gray-400 hover:shadow-lg
                                focus:bg-gray-400 focus:shadow-lg focus:outline-none focus:ring-0
                                active:bg-gray-500 active:shadow-lg
                                transition
                                duration-150
                                ease-in-out">送出</button>
                        </div>

                    </form>
                </div>

                <div class="">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-15 w-15 text-gray-400 opacity-25"
                             fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76" />
                        </svg>

                    </div>
                </div>
            </div>
        </div>
    </div>



</div>

<!-- footer -->
<footer class="grid justify-items-center text-center text-white mt-5" style="background-color: #f1f1f1;">
    <div class="container pt-9">
        <div class="flex justify-center mb-9">
            <a href="#!" class="mr-9 text-gray-800">
                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f"
                     class="svg-inline--fa fa-facebook-f w-2.5" role="img" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 320 512">
                    <path fill="currentColor"
                          d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                    </path>
                </svg>
            </a>
            <a href="#!" class="mr-9 text-gray-800">
                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter"
                     class="svg-inline--fa fa-twitter w-4" role="img" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 512 512">
                    <path fill="currentColor"
                          d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                    </path>
                </svg>
            </a>
            <a href="#!" class="mr-9 text-gray-800">
                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google"
                     class="svg-inline--fa fa-google w-3.5" role="img" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 488 512">
                    <path fill="currentColor"
                          d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z">
                    </path>
                </svg>
            </a>
            <a href="#!" class="mr-9 text-gray-800">
                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram"
                     class="svg-inline--fa fa-instagram w-3.5" role="img" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 448 512">
                    <path fill="currentColor"
                          d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                    </path>
                </svg>
            </a>
            <a href="#!" class="mr-9 text-gray-800">
                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in"
                     class="svg-inline--fa fa-linkedin-in w-3.5" role="img" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 448 512">
                    <path fill="currentColor"
                          d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
                    </path>
                </svg>
            </a>
            <a href="#!" class="text-gray-800">
                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="github"
                     class="svg-inline--fa fa-github w-4" role="img" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 496 512">
                    <path fill="currentColor"
                          d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z">
                    </path>
                </svg>
            </a>
        </div>
    </div>

    <div class="text-center text-gray-700 p-4" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2021 Copyright:
        <a class="text-gray-800" href="https://tailwind-elements.com/">Tailwind Elements</a>
    </div>
</footer>


</body>
<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
        integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
        crossorigin=""></script>
<script>
    var map;

    // 建立基本地圖
    map = L.map('map').setView([23.566270891735304, 120.30477734879676], 20);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '<a href="https://www.openstreetmap.org/">OSM</a>',
        maxZoom: 18,
    }).addTo(map);

    // 建立地標
    var marker = L.marker([23.566270891735304, 120.30477734879676]);
    marker.addTo(map);

    // 讀取 GeoJSON，加入行政區邊
    $.getJSON('YOURFILE.json', function (r) {
        L.geoJSON(r, { color: '#333' }).addTo(map);
    });
</script>

</html>