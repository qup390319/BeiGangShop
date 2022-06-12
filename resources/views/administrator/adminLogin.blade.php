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

    <div class="w-full h-1920 grid content-center">
        <div>
            <div class="flex justify-center grid content-end h-64">
                <div class="text-center text-4xl text-blue-500 font-bold">hello!</div>
                <div class="text-center text-xl text-blue-500">美食大補帖</div>
            </div>
            <div class="flex justify-end">
                <div class="text-left w-64 text-sm text-red-500">管理員登入</div>
            </div>
        </div>
        <div>
            <form action="{{route('post_login_page')}}" method="post">
                <div class="block p-6 mx-12 bg-white">

                        @csrf
                        <div class="form-group mb-6">
                            <input name="account" class="form-control
                  block
                  w-full
                  px-3
                  py-1.5
                  text-base
                  font-normal
                  text-gray-700
                  bg-white bg-clip-padding
                  border border-solid border-gray-300
                  rounded-full
                  shadow-lg
                  shadow-blue-500/50
                  transition
                  ease-in-out
                  m-0
                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInputEmail1"
                                   aria-describedby="emailHelp" placeholder="帳號 ">
                        </div>
                        <div class="form-group mb-6">
                            <input name="password" type="password" class="form-control block
                  w-full
                  px-3
                  py-1.5
                  text-base
                  font-normal
                  text-gray-700
                  bg-white bg-clip-padding
                  border border-solid border-gray-300
                  rounded-full
                  shadow-lg
                  shadow-blue-500/50
                  transition
                  ease-in-out
                  m-0
                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                   id="exampleInputPassword1" placeholder="密碼">
                        </div>
                        <div class="flex justify-end">
                            <a href="#!"
                               class="text-sm text-gray-400 hover:text-blue-700 focus:text-blue-700 transition duration-200 ease-in-out"></a>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class="
                    mt-2
                    px-6
                    py-2.5
                    text-white
                    font-medium
                    text-xs
                    leading-tight
                    rounded-full
                    shadow-md
                    bg-gradient-to-r from-cyan-500 to-blue-500
                    hover:bg-blue-700 hover:shadow-lg
                    focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                    active:bg-blue-800 active:shadow-lg
                    transition
                    duration-150
                    ease-in-out
                    ">登入
                            </button>
                        </div>

                </div>
            </form>
        </div>
    </div>

    </body>
</html>
