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

    <link rel="stylesheet" href="./style.css"/>
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

    <div class="sidebar bg-teal-900 text-blue-100 w-3/5 md:w-1/5 space-y-6 md:px-1 px-2 md:px-10 py-7 absolute inset-y-0 left-0 transform
-translate-x-full transition duration-200 ease-in-out md:relative md:translate-x-0">
        <!-- logo -->


        <!-- nav -->
        <nav class="lg:ml-3 md:ml-0 grid">
            <a href="{{route('get_notiHome_page')}}"
               class="mb-3 flex block py-2 px-3 rounded lg:text-xl md:text-sm hover:bg-teal-700 hover:text-white">
                首頁
            </a>
            <a href="{{route('get_storeHome_page')}}"
               class="mb-3 flex block py-2 px-3 rounded lg:text-xl md:text-sm hover:bg-teal-700 hover:text-white">
                店家管理
            </a>
            <a href="{{route('get_login_page')}}"
               class="mb-3 flex block py-2 px-3 rounded lg:text-xl md:text-sm hover:bg-teal-700 hover:text-white">
                登出
            </a>
        </nav>

    </div>
</div>

<!-- content -->
<div class="mx-10 my-5">


    <!-- 近期通知 -->
    <div>
        <div class="mt-6">
            <p>
                現有店家
            </p>
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
                            <div class="min-w-full ">
                                <div class="bg-white">
                                    <div class="w-full grid grid-cols-4">
                                        <div scope="col"
                                             class="text-sm font-medium text-gray-900 px-2 py-2 text-left">
                                            名稱
                                        </div>
                                        <div scope="col"
                                             class="text-sm font-medium text-gray-900 px-2 py-2 text-left">
                                            連絡電話
                                        </div>
                                        <div scope="col"
                                             class="text-sm font-medium text-gray-900 px-2 py-2 text-left">
                                            地址
                                        </div>
                                        <div scope="col"
                                             class="text-sm font-medium text-gray-900 px-2 py-2 text-left flex justify-center">
                                            刪除
                                        </div>
                                    </div>
                                </div>
                                <div id="tbody">

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /表格 -->

            <!-- 頁數 -->
            <div class="w-full flex justify-end space-x-1">
                <div class="flex items-center space-x-1">
                    <a href="#"
                       class="px-3 py-1 text-gray-700 bg-gray-200 rounded-md hover:bg-blue-400 hover:text-white">
                        1
                    </a>
                    <a href="#"
                       class="px-3 py-1 text-gray-700 bg-gray-200 rounded-md hover:bg-blue-400 hover:text-white">
                        2
                    </a>
                    <a href="#"
                       class="px-3 py-1 text-gray-700 bg-gray-200 rounded-md hover:bg-blue-400 hover:text-white">
                        3
                    </a>
                    <a href="#"
                       class="px-3 py-1 text-gray-700 bg-gray-200 rounded-md hover:bg-blue-400 hover:text-white">
                        4
                    </a>
                </div>
            </div>
            <!-- /頁數 -->

        </div>
    </div>
    <!-- /近期通知 -->

    <!-- 新增店家 -->
    <div>
        <div class="mt-6">
            <p>
                新增店家
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
                        <div class="min-w-full ">
                            <div class="bg-white">
                                <div class="flex w-full grid grid-cols-4">
                                    <div scope="col" class="text-sm font-medium text-gray-900 px-2 py-2 text-left">
                                        名稱
                                    </div>
                                    <div scope="col" class="text-sm font-medium text-gray-900 px-2 py-2 text-left">
                                        連絡電話
                                    </div>
                                    <div scope="col" class="text-sm font-medium text-gray-900 px-2 py-2 text-left">
                                        地址
                                    </div>
                                    <div scope="col" class="text-sm font-medium text-gray-900 px-2 py-2 text-left flex justify-center">
                                        新增
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="bg-gray-100 border-b flex w-full grid grid-cols-4">
                                    <div class="text-sm text-gray-900 font-light px-2 py-2 whitespace-nowrap">
                                        <input id="add_name" class="w-full px-1 py-1" placeholder="名稱">
                                    </div>
                                    <div class="text-sm text-gray-900 font-light px-2 py-2 whitespace-nowrap">
                                        <input id="add_phone" class="w-full px-1 py-1" placeholder="電話">
                                    </div>
                                    <div class="text-sm text-gray-900 font-light px-2 py-2 whitespace-nowrap">
                                        <input id="add_address" class="w-full px-1 py-1" placeholder="地址">
                                    </div>
                                    <div class="flex justify-center text-sm text-gray-900 font-light px-2 py-2 whitespace-nowrap">
                                        <button onclick="sure_add()">
                                            <svg  xmlns="http://www.w3.org/2000/svg" class="flex justify-center h-6 w-6 text-blue-500"
                                                  viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                                                      clip-rule="evenodd"/>
                                            </svg>
                                        </button>
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
    <!-- /新增店家 -->

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
    });

    $(document).ready(function () {
        //讀取資料
        $.ajax({
            url: '{{route('get_storeHome_data')}}',
            method: 'POST',
            data: {
                _token: '{{csrf_token()}}',
            },
            success: function (res) {
                $("#tbody div").remove();

                //store
                let store = res['store']['data'];
                // let page=res['store']['data'];

                console.log(res['store'])
                if (store.length > 0) {
                    $.each(store, function (index, value) {
                        // console.log(value['info_name']);
                        // console.log(index);

                        let row = `
                        <div class="detail_in bg-gray-100 border-b grid grid-cols-4" >
                            <input class="hidden detail_id" value="${value['info_id']}">
                            <div class=" text-sm text-gray-900 font-light px-2 py-2 ">
                                ${value['info_name']}
                            </div>
                            <div class="  text-sm text-gray-900 font-light px-2 py-2 ">
                                ${value['info_phone']}
                            </div>
                            <div class="  text-sm text-gray-900 font-light px-2 py-2 ">
                                ${value['info_address']}
                            </div>
                            <div class="flex grid content-center w-full text-sm text-gray-900 font-light px-2 py-2 ">
                                <svg xmlns="http://www.w3.org/2000/svg" class=" w-full h-6 w-6 text-red-600"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </div>
                        </div>
                        `;
                        $("#tbody").append(row);
                    })
                    {{--$("#tbody").append({{$to->links(2) }});--}}
                }
                let id= $('.detail_id').valueOf();
               $('.detail_in').click(function (){
                   // $.route('get_storeDetail_page');
                   // $(this).val()
                   id=$(this).find("input").val()
                   // console.log(id)
                   window.location.href=`{{route('get_storeDetail_page')}}?info_id=${id}`;
               })

            },
            error: function (res) {
                window.alert('連線失敗');
            }
        })
    });

    //新增資料
    function sure_add(){
        let add_name=$('#add_name').val();
        let add_phone=$('#add_phone').val();
        let add_address=$('#add_address').val();


        $.ajax({
            url: '{{route('insert_storeHome_data')}}',
            method: 'POST',
            data: {
                _token: '{{csrf_token()}}',
                add_name: add_name,
                add_phone: add_phone,
                add_address: add_address,
            },
            success: function (res) {
                console.log(res)
                if (res=='err'){Swal.fire(
                    '新增失敗',
                    '請重新檢查填寫內容',
                    'error'
                )}
                if (res=='success'){Swal.fire(
                    '成功新增店家',
                    '',
                    'success'
                )}
            },
            error: function (res) {
                window.alert('連線失敗');
            }
        })
    }

</script>
</html>
