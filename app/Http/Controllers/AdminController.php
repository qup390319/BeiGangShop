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

        //登入 回傳頁面
        if ($user_data!=''){
            return redirect()->route('get_notiHome_page');
        }else{
            return redirect()->route('get_login_page');
        }
    }

    //通知 畫面 notiHome
    public function get_notiHome_page(Request $request)
    {
        //店家總數
        $quantity=DB::table('t_store_info')
            ->count('info_name');

        //資料表格內容
        $data=DB::table('t_notifications')
        ->get();
        //回傳資料
        $result=[
            'quantity'=>$quantity,
            'data'=>$data,
        ];

        return view('administrator.notiHome',$result);
    }

    //詳細通知 畫面 notiHome
    public function get_notiDetail_page(Request $request)
    {
        //獲取 通知id
        $noti_id = $request->get('noti_id');

        //獲取 該id其餘資料
        $noti_data = DB::table("t_notifications")
            ->where('noti_id', $noti_id)
            ->first();
        //回傳資料
        $result=[
            'noti_data'=>$noti_data,
        ];
        return view('administrator.notiDetail',$result);
    }
    //詳細通知 更改狀態
    public function post_notiDetail_page(Request $request)
    {
        //獲取 通知id
        $noti_id = $request->get('noti_id');
        $noti_state=$request->get('noti_state');
        if($noti_state==='待處理'){
            DB::table("t_notifications")
                ->where('noti_id', $noti_id)
                ->update([
                    'noti_state' => '待處理',
                ]);
        }else{
            DB::table("t_notifications")
                ->where('noti_id', $noti_id)
                ->update([
                    'noti_state' => '結案',
                ]);
        }
        return redirect()->route('get_notiHome_page');
}

    //現有店家 畫面 storeHome
    public function get_storeHome_page()
    {
        //店家
        $store=DB::table('t_store_info')
//                ->get();
            ->paginate(5);
        return view('administrator.storeHome',$store);
    }

    public function get_storeHome_data(Request $request)
    {
        try{
            //店家
            $store=DB::table('t_store_info')
//                ->get();
                ->paginate(5);

            //回傳資料
            $result=[
                'store'=>$store,
            ];
            return $result;
        }catch (\Exception $exception){
        }
    }
    public function insert_storeHome_data(Request $request)
    {
        try{
            if ($request->add_name===null){return 'err';}
            if ($request->add_phone===null){return 'err';}
            if ($request->add_address===null){return 'err';}

            //店家
            DB::table('t_store_info')
                ->insert([
                    'info_name' => $request->add_name,
                    'info_phone' => $request->add_phone,
                    'info_address' => $request->add_address,
                ]);


            return 'success';
        }catch (\Exception $exception){

        }

    }

    //店家詳細資訊 storeDetail
    public function get_storeDetail_page()
    {
        return view('administrator.storeDetail');
    }
}
