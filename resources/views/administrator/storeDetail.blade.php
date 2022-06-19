<!DOCTYPE html>
<html>
<head>
    <!-- <script src="https://unpkg.com/tailwindcss-jit-cdn"></script> -->
    <script src="https://cdn.tailwindcss.com"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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


    <!-- 店家名稱 -->
    <div>
        <div class="mt-6">
            <div class="font-bold text-2xl">
                {{$store->info_name}}
            </div>
        </div>
        <!-- 橫線 -->
        <div class="flex-grow border-t border-gray-400 my-2"></div>
        <!-- 橫線 -->

        <div class="bg-gray-100">
            <!-- 表格 -->
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="min-w-full ">
                                <div class="bg-white">
                                    <div class="flex grid grid-cols-4  bg-gray-100 border-b">
                                        <div class=" text-sm font-medium text-gray-900 px-2 py-2 text-left">
                                            連絡電話
                                        </div>
                                        <div
                                            class="col-span-3 text-sm text-gray-900 font-light px-2 py-2 whitespace-nowrap">
                                            {{$store->info_phone}}
                                        </div>

                                    </div>
                                </div>
                                <div>
                                    <div class="flex grid grid-cols-4 bg-gray-100 border-b">
                                        <div
                                            class="text-sm font-medium text-gray-900 px-2 py-2 text-left">
                                            地址
                                        </div>
                                        <div
                                            class="col-span-3 text-sm text-gray-900 font-light px-2 py-2 whitespace-nowrap">
                                            {{$store->info_address}}
                                        </div>
                                    </div>
                                </div>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /表格 -->

        </div>
    </div>
    <!-- /店家名稱 -->

    <!-- 店家評論 -->
    <div>
        <div class="mt-6">
            <p>
                店家評論
            </p>
        </div>
        <!-- 橫線 -->
        <div class="flex-grow border-t border-gray-400 my-2"></div>
        <!-- 橫線 -->

        <div class="bg-gray-100">
            <!-- 表格 -->
            <div class="flex flex-col w-full">
                <div class="w-full overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="w-full py-2 inline-block w-full sm:px-6 lg:px-8">
                        <div class="w-full overflow-hidden">
                            <div class="flex w-full">
                                <div id="t_comment" class=" w-full">
                                    {{--單筆--}}
                                    <div class="flex w-full mt-1 grid grid-cols-5 bg-gray-100 border border-gray-200">
                                        <div class="font-light text-sm grid content-center">
                                            評論1
                                        </div>
                                        <div class="col-span-3 text-sm font-light">
                                            評論內容內容內容內容內容內容內容
                                        </div>
                                        <div class="font-light grid content-center">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                 class="flex grid content-center w-full h-6 w-6 text-red-600"
                                                 viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                      d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                      clip-rule="evenodd"/>
                                            </svg>
                                        </div>
                                    </div>
                                    {{--/單筆--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /表格 -->

            <!-- 頁數 -->
            <div class="flex justify-end mt-3">
                <nav aria-label="Page navigation example">
                    <ul class="flex list-style-none">
                        <li class="page-item"><a
                                class="page-link relative block mx-3 px-1 rounded border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none"
                                href="#">1</a></li>
                        <li class="page-item active"><a
                                class="page-link relative block mx-3 px-1 rounded border-0 bg-gray-600 outline-none transition-all duration-300 rounded text-white hover:text-white hover:bg-blue-600 shadow-md focus:shadow-md"
                                href="#">2 <span class="visually-hidden">(current)</span></a></li>
                        <li class="page-item"><a
                                class="page-link relative block mx-3 px-1 rounded border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none"
                                href="#">3</a></li>
                    </ul>
                </nav>
            </div>
            <!-- /頁數 -->

        </div>
    </div>
    <!-- /店家評論 -->

    <!-- 新增評論 -->
    <div>
        <div class="mt-6">
            <p>
                新增評論
            </p>
        </div>
        <!-- 橫線 -->
        <div class="flex-grow border-t border-gray-400 my-2"></div>
        <!-- 橫線 -->

        <!-- 表格 -->
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <div class="bg-gray-100 w-full px-2 pb-8">
                            <div class="flex">
                                <div class="w-4/5">
                                    <div class="text-sm px-1 pt-2">
                                        內容
                                    </div>
                                    <div class="text-sm p-1 border-b-2">
                                        <input id="comment_input" class="rounded px-2 py-1" placeholder="輸入評論內容">
                                    </div>
                                </div>
                                <div onclick="sure_add()" class="grid content-center  justify-center w-1/5">
                                    <div class="text-sm">
                                        新增
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="h-6 w-6 w-full text-blue-500 justify-center " viewBox="0 0 20 20"
                                         fill="currentColor">
                                        <path fill-rule="evenodd"
                                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <div class="w-4/5">
                                    <div class="text-sm px-1 pt-2">
                                        星級
                                    </div>
                                    <div class="text-sm p-1 ">
                                        <ul class="flex justify-top">
                                            <li>
                                                <svg id="star1" xmlns="http://www.w3.org/2000/svg"
                                                     class="mr-2 h-5 w-5 text-yellow-500" fill="none"
                                                     viewBox="0 0 24 24 " stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg id="star2" xmlns="http://www.w3.org/2000/svg"
                                                     class="mr-2 h-5 w-5 text-yellow-500" fill="none"
                                                     viewBox="0 0 24 24 " stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg id="star3" xmlns="http://www.w3.org/2000/svg"
                                                     class="mr-2 h-5 w-5 text-yellow-500" fill="none"
                                                     viewBox="0 0 24 24 " stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg id="star4" xmlns="http://www.w3.org/2000/svg"
                                                     class="mr-2 h-5 w-5 text-yellow-500" fill="none"
                                                     viewBox="0 0 24 24 " stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg id="star5" xmlns="http://www.w3.org/2000/svg"
                                                     class="mr-2 h-5 w-5 text-yellow-500" fill="none"
                                                     viewBox="0 0 24 24 " stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                                                </svg>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /表格 -->
    </div>
    <!-- /新增評論 -->

</div>
<!-- /content -->
</body>
<script>
    //grab everything we need
    const btn = document.querySelector('.mobile-menu-button');
    const sidebar = document.querySelector('.sidebar');
    //add our event listener for the click
    btn.addEventListener('click', () => {
        sidebar.classList.toggle('-translate-x-full');
    })
    let score = 0;
    //讀取資料
    let id = {{$store->info_id}}
    $.ajax({
        url: '{{route('get_storeDetail_data')}}',
        method: 'POST',
        data: {
            _token: '{{csrf_token()}}',
            id: {{$store->info_id}},
        },
        success: function (res) {
            // console.log(res['comment'])

            $("#t_comment div").remove();
            let comment = res['comment'];
            if (comment.length > 0) {
                $.each(comment, function (index, value) {
                    let row = `
                    <div class="flex w-full mt-1 grid grid-cols-5 bg-gray-100 border border-gray-200 px-1 py-2">
                        <div class="font-light text-sm grid content-center">
                            評論${index + 1}
                        </div>
                        <div class=" text-sm font-light grid content-center">
                            ${value['comment_score']}顆星
                        </div>
                        <div class="col-span-2 text-sm font-light grid content-center">
                            <p class="truncate">
                             ${value['comment_content']}
                            </p>
                        </div>
                        <div class="font-light grid content-center">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="flex grid content-center w-full h-6 w-6 text-red-600"
                                 viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                      d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                    `;
                    $("#t_comment").append(row);
                })
                {{--$("#tbody").append({{$to->links(2) }});--}}
            }

        },
        error: function (res) {
            window.alert('連線失敗');
        }
    })

    //更改評論 星級
    $("#star1").click(function () {
        score=1;
        $("#star1").attr("fill", 'none');
        $("#star2").attr("fill", 'none');
        $("#star3").attr("fill", 'none');
        $("#star4").attr("fill", 'none');
        $("#star5").attr("fill", 'none');
        $star = $("#star4").attr("fill");
        if ($star == 'none') {
            $("#star1").attr("fill", 'currentColor');
            $("#star2").attr("fill", 'none');
            $("#star3").attr("fill", 'none');
            $("#star4").attr("fill", 'none');
            $("#star5").attr("fill", 'none');
        }
    });
    $("#star2").click(function () {
        score=2;
        $("#star1").attr("fill", 'none');
        $("#star2").attr("fill", 'none');
        $("#star3").attr("fill", 'none');
        $("#star4").attr("fill", 'none');
        $("#star5").attr("fill", 'none');
        $star = $("#star2").attr("fill");
        if ($star == 'none') {
            $("#star1").attr("fill", 'currentColor');
            $("#star2").attr("fill", 'currentColor');
            $("#star3").attr("fill", 'none');
            $("#star4").attr("fill", 'none');
            $("#star5").attr("fill", 'none');
        }
    });
    $("#star3").click(function () {
        score=3;
        $("#star1").attr("fill", 'none');
        $("#star2").attr("fill", 'none');
        $("#star3").attr("fill", 'none');
        $("#star4").attr("fill", 'none');
        $("#star5").attr("fill", 'none');
        $star = $("#star3").attr("fill");
        if ($star == 'none') {
            $("#star1").attr("fill", 'currentColor');
            $("#star2").attr("fill", 'currentColor');
            $("#star3").attr("fill", 'currentColor');
            $("#star4").attr("fill", 'none');
            $("#star5").attr("fill", 'none');
        }
        if ($star == 'currentColor') {
            $("#star1").attr("fill", 'none');
            $("#star2").attr("fill", 'none');
            $("#star3").attr("fill", 'none');
            $("#star4").attr("fill", 'none');
            $("#star5").attr("fill", 'none');
        }
    });
    $("#star4").click(function () {
        score=4;
        $("#star1").attr("fill", 'none');
        $("#star2").attr("fill", 'none');
        $("#star3").attr("fill", 'none');
        $("#star4").attr("fill", 'none');
        $("#star5").attr("fill", 'none');
        $star = $("#star4").attr("fill");
        if ($star == 'none') {
            $("#star1").attr("fill", 'currentColor');
            $("#star2").attr("fill", 'currentColor');
            $("#star3").attr("fill", 'currentColor');
            $("#star4").attr("fill", 'currentColor');
            $("#star5").attr("fill", 'none');
        }
    });
    $("#star5").click(function () {
        score=5;
        $("#star1").attr("fill", 'none');
        $("#star2").attr("fill", 'none');
        $("#star3").attr("fill", 'none');
        $("#star4").attr("fill", 'none');
        $("#star5").attr("fill", 'none');
        $star = $("#star5").attr("fill");
        if ($star == 'none') {
            $("#star1").attr("fill", 'currentColor');
            $("#star2").attr("fill", 'currentColor');
            $("#star3").attr("fill", 'currentColor');
            $("#star4").attr("fill", 'currentColor');
            $("#star5").attr("fill", 'currentColor');
        }
    });

    //新增資料
    function sure_add() {
        let comment_content = $('#comment_input').val();

        $.ajax({
            url: '{{route('insert_storeDetail_data')}}',
            method: 'POST',
            data: {
                _token: '{{csrf_token()}}',
                comment_name: '{{$store->info_name}}',
                comment_content: comment_content,
                score:score,
            },
            success: function (res) {
                // console.log(res)
                if (res == 'err') {
                    Swal.fire(
                        '新增失敗',
                        '請重新檢查填寫內容',
                        'error'
                    )
                }
                if (res == 'success') {
                    Swal.fire(
                        '成功新增評論',
                        '',
                        'success'
                    ).then(()=>{
                        window.location.reload();
                    })
                }
            },
            error: function (res) {
                window.alert('連線失敗');
            }
        })
    }

</script>
</html>
