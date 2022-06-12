<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //取得 主畫面
    public function get_home_page()
    {
        return view('common_user.homePage');
    }
}
