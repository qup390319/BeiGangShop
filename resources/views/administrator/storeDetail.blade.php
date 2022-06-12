<!DOCTYPE html>
<html>
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
        <link rel="stylesheet" href="./style.css" />
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
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
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


        <!-- 店家名稱 -->
        <div>
            <div class="mt-6">
                <p>
                    店家名稱
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
                                <table class="min-w-full ">
                                    <thead class="bg-white">
                                    <tr>
                                        <th scope="col"
                                            class="text-sm font-medium text-gray-900 px-2 py-2 text-left">
                                            連絡電話
                                        </th>
                                        <th scope="col"
                                            class="text-sm font-medium text-gray-900 px-2 py-2 text-left">
                                            地址
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="bg-gray-100 border-b">
                                        <td class="text-sm text-gray-900 font-light px-2 py-2 whitespace-nowrap">
                                            Mark
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-2 py-2 whitespace-nowrap">
                                            Otto
                                        </td>
                                    </tr>
                                    </tbody>
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
                                <table class="min-w-full ">
                                    <tbody>
                                    <tr class="bg-gray-100 border-b">
                                        <th scope="col"
                                            class="text-sm font-medium text-gray-900 px-2 py-2 text-left">
                                            評論1
                                        </th>
                                        <td class="text-sm text-gray-900 font-light px-2 py-2 whitespace-nowrap">
                                            Mark
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-2 py-2 whitespace-nowrap">
                                            Otto
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-2 py-2 whitespace-nowrap">
                                            @mdo
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-2 py-2 whitespace-nowrap">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-600"
                                                 viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                      d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                      clip-rule="evenodd" />
                                            </svg>
                                        </td>
                                    </tr>
                                    <tr class="bg-gray-100 border-b">
                                        <th scope="col"
                                            class="text-sm font-medium text-gray-900 px-2 py-2 text-left">
                                            評論2
                                        </th>
                                        <td class="text-sm text-gray-900 font-light px-2 py-2 whitespace-nowrap">
                                            Mark
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-2 py-2 whitespace-nowrap">
                                            Otto
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-2 py-2 whitespace-nowrap">
                                            @mdo
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-2 py-2 whitespace-nowrap">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-600"
                                                 viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                      d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                      clip-rule="evenodd" />
                                            </svg>
                                        </td>
                                    </tr>
                                    <tr class="bg-gray-100 border-b">
                                        <th scope="col"
                                            class="text-sm font-medium text-gray-900 px-2 py-2 text-left">
                                            評論3
                                        </th>
                                        <td class="text-sm text-gray-900 font-light px-2 py-2 whitespace-nowrap">
                                            Mark
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-2 py-2 whitespace-nowrap">
                                            Otto
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-2 py-2 whitespace-nowrap">
                                            @mdo
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-2 py-2 whitespace-nowrap">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-600"
                                                 viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                      d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                      clip-rule="evenodd" />
                                            </svg>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
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
                            <table class="min-w-full ">
                                <thead class="bg-white">
                                <tr>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-2 py-2 text-left">
                                        內容
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-2 py-2 text-left">
                                        星級
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-2 py-2 text-left">
                                        新增
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="bg-gray-100 border-b">
                                    <td class="text-sm text-gray-900 font-light px-2 py-2 whitespace-nowrap">
                                        Mark
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-2 py-2 whitespace-nowrap">
                                        <ul class="flex justify-start">
                                            <li>
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                     data-icon="star" class="w-4 text-yellow-500 mr-1" role="img"
                                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                    <path fill="currentColor"
                                                          d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                    </path>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                     data-icon="star" class="w-4 text-yellow-500 mr-1" role="img"
                                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                    <path fill="currentColor"
                                                          d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                    </path>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                     data-icon="star" class="w-4 text-yellow-500 mr-1" role="img"
                                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                    <path fill="currentColor"
                                                          d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                    </path>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg aria-hidden="true" focusable="false" data-prefix="far"
                                                     data-icon="star" class="w-4 text-yellow-500 mr-1" role="img"
                                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                    <path fill="currentColor"
                                                          d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                                    </path>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg aria-hidden="true" focusable="false" data-prefix="far"
                                                     data-icon="star" class="w-4 text-yellow-500" role="img"
                                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                    <path fill="currentColor"
                                                          d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                                    </path>
                                                </svg>
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-2 py-2 whitespace-nowrap">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500"
                                             viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                                                  clip-rule="evenodd" />
                                        </svg>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
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
    </script>
</html>
