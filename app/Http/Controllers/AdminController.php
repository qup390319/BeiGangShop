<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //取得 登入畫面
    public function get_login_page()
    {
        return view('administrator.adminLogin');
    }
    //登入驗證
    public function post_login_page(Request $request)
    {

        $account = $request->get('account');
        $password = $request->get('password');

        $user_data = DB::table('user_account')
            ->where('user_account', $account)
            ->where('user_password', $password)
            ->first();
        //店家總數 notiHome顯示
        $quantity=DB::table('t_store_info')
            ->count('info_name');
        $quantity=[
            'quantity'=>$quantity,
        ];
        //登入 回傳頁面
        if ($user_data!=''){
            return redirect()->route('get_notiHome_page',$quantity);
        }else{
            return redirect()->route('get_login_page');
        }
    }

    //通知 畫面 notiHome
    public function get_notiHome_page(Request $request)
    {
        //店家總數
        $quantity=$request->quantity;
        $quantity=[
            'quantity'=>$quantity,
        ];

        //資料表格內容
        return view('administrator.notiHome',$quantity);
    }
    //詳細通知 畫面 notiHome
    public function get_notiDetail_page()
    {
        return view('administrator.notiDetail');
    }
    //詳細通知 畫面 storeHome
    public function get_storeHome_page()
    {
        return view('administrator.storeHome');
    }
    //詳細通知 畫面 storeDetail
    public function get_storeDetail_page()
    {
        return view('administrator.storeDetail');
    }
}
