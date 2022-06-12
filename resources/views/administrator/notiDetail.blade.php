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

                <a href=""
                   class="mb-3 flex block py-2 px-3 rounded lg:text-xl md:text-sm hover:bg-teal-700 hover:text-white">

                    首頁
                </a>
                <a href=""
                   class="mb-3 flex block py-2 px-3 rounded lg:text-xl md:text-sm hover:bg-teal-700 hover:text-white">

                    店家管理
                </a>
                <a href=""
                   class="mb-3 flex block py-2 px-3 rounded lg:text-xl md:text-sm hover:bg-teal-700 hover:text-white">

                    登出
                </a>
            </nav>

        </div>
    </div>

    <!-- content -->
    <div class="mx-10 my-5">
        <!-- 店家總數 -->
        <div>
            <div>
                店家總數
            </div>
            <div class="bg-gray-100 w-32 h-20 flex justify-center">
                <div class="text-6xl grid content-center">
                    320
                </div>
            </div>
        </div>
        <!-- /店家總數 -->

        <!-- 通知 -->
        <div>
            <div class="mt-6">
                <p>
                    通知名稱
                </p>
            </div>
            <div class="flex-grow border-t border-gray-400 my-2"></div>
            <!-- 內容 -->
            <div class="bg-gray-100 py-1 ">
                <div class="my-2">
                    <label for="exampleFormControlInput1" class="form-label inline-blocktext-gray-700 w-full">類別
                    </label>
                    <input type="text" class="
                      form-control
                      block
                      w-full
                      py-2
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
                    " id="exampleFormControlInput1" placeholder="Example label" />
                </div>
                <div class="my-2">
                    <label for="exampleFormControlInput1" class="form-label inline-blocktext-gray-700 w-full">詳細內容
                    </label>
                    <input type="text" class="
                      form-control
                      block
                      w-full
                      py-2
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
                    " id="exampleFormControlInput1" placeholder="Example label" />
                </div>
                <div class="my-2">
                    <label for="exampleFormControlInput1"
                           class="form-label inline-blocktext-gray-700 w-full">解決方案</label>
                    <input type="text" class="
                      form-control
                      block
                      w-full
                      py-2
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
                    " id="exampleFormControlInput1" placeholder="Example label" />
                </div>
                <div class="my-2">
                    <label for="exampleFormControlInput1" class="form-label inline-blocktext-gray-700 w-full">時間</label>
                    <input type="text" class="
                      form-control
                      block
                      w-full
                      py-2
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
                    " id="exampleFormControlInput1" placeholder="Example label" />
                </div>
            </div>
            <!-- /內容 -->

            <!-- 狀態按鈕 -->
            <div>
                <div class="flex space-x-2 justify-end">
                    <button type="button"
                            class="rounded-full inline-block px-8 py-2.5 bg-blue-300 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-400 hover:shadow-lg focus:bg-blue-400 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-500 active:shadow-lg transition duration-150 ease-in-out">待處理</button>
                    <button type="button"
                            class="rounded-full inline-block px-8 py-2.5 bg-red-300 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-400 hover:shadow-lg focus:bg-red-400 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-500 active:shadow-lg transition duration-150 ease-in-out">結案</button>
                </div>

            </div>
            <!-- /狀態按鈕 -->

        </div>
        <!-- /通知 -->
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
