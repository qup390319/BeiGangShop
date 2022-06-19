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
        if ($user_data != '') {
            return redirect()->route('get_notiHome_page');
        } else {
            return redirect()->route('get_login_page');
        }
    }

    //通知 畫面 notiHome
    public function get_notiHome_page(Request $request)
    {
        //店家總數
        $quantity = DB::table('t_store_info')
            ->count('info_name');

        //資料表格內容
        $data = DB::table('t_notifications')
            ->get();
        //回傳資料
        $result = [
            'quantity' => $quantity,
            'data' => $data,
        ];

        return view('administrator.notiHome', $result);
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
        $result = [
            'noti_data' => $noti_data,
        ];
        return view('administrator.notiDetail', $result);
    }

    //詳細通知 更改狀態
    public function post_notiDetail_page(Request $request)
    {
        //獲取 通知id
        $noti_id = $request->get('noti_id');
        $noti_state = $request->get('noti_state');
        if ($noti_state === '待處理') {
            DB::table("t_notifications")
                ->where('noti_id', $noti_id)
                ->update([
                    'noti_state' => '待處理',
                    'noti_category'=>$request->get('noti_category'),
                    'noti_detail'=>$request->get('noti_detail'),
                    'noti_solution'=>$request->get('noti_solution'),
                ]);
        } else {
            DB::table("t_notifications")
                ->where('noti_id', $noti_id)
                ->update([
                    'noti_state' => '結案',
                    'noti_category'=>$request->get('noti_category'),
                    'noti_detail'=>$request->get('noti_detail'),
                    'noti_solution'=>$request->get('noti_solution'),
                ]);
        }



        return redirect()->route('get_notiHome_page');
    }

    //現有店家 畫面 storeHome
    public function get_storeHome_page()
    {
        //店家
        $store = DB::table('t_store_info')
            ->orderBy('info_id', 'desc')
            //                ->get();
            ->paginate(5);
//        dd($store);
        return view('administrator.storeHome', $store);
    }

    public function get_storeHome_data(Request $request)
    {
        try {
            //店家
            $store = DB::table('t_store_info')
                ->orderBy('info_id', 'desc')
//                ->get();
                ->paginate(5);

            //回傳資料
            $result = [
                'store' => $store,
            ];
            return $result;
        } catch (\Exception $exception) {
        }
    }

    public function delete_store(Request $request)
    {
        try {
            $id = $request->info_id;

            //刪除店家
            DB::table('t_store_info')
                ->where('info_id',$id)
                ->delete();
            return 'success';
        } catch (\Exception $exception) {
        }
    }

    public function insert_storeHome_data(Request $request)
    {
        try {
            if ($request->add_name === null) {
                return 'err';
            }
            if ($request->add_phone === null) {
                return 'err';
            }
            if ($request->add_address === null) {
                return 'err';
            }

            //店家
            DB::table('t_store_info')
                ->insert([
                    'info_name' => $request->add_name,
                    'info_phone' => $request->add_phone,
                    'info_address' => $request->add_address,
                ]);


            return 'success';
        } catch (\Exception $exception) {

        }
    }

    //店家詳細資訊 頁面 storeDetail
    public function get_storeDetail_page(Request $request)
    {
        $id = $request->info_id;

        //店家
        $store = DB::table('t_store_info')
            ->where('info_id', $id)
            ->first();

        //回傳資料
        $result = [
            'store' => $store,
        ];
        return view('administrator.storeDetail', $result);
    }

    public function get_storeDetail_data(Request $request)
    {
        try {
//            return $request->id;
            //店家
            $store = DB::table('t_store_info')
                ->where('info_id', $request->id)
                ->first();
            $store_name=$store->info_name;


            $comment = DB::table('t_store_comment')
                ->where('comment_name', $store_name)
                ->get();
            $comment_score = DB::table('t_store_comment')
                ->where('comment_score', $store_name)
                ->get();

            //回傳資料
            $result = [
                'comment' => $comment,
                'comment_score'=>$comment_score,
            ];
            return $result;
        } catch (\Exception $exception) {
        }
    }

    public function insert_storeDetail_data(Request $request)
    {
        try {

            if ($request->comment_content === null) {
                return 'err';
            }
            if ($request->score == 0) {
                return 'err';
            }


            //店家
            DB::table('t_store_comment')
                ->insert([
                    'comment_name'=>$request->comment_name,
                    'comment_content' => $request->comment_content,
                    'comment_score'=>$request->score,
                ]);

            return 'success';
        } catch (\Exception $exception) {

        }
    }

    //熱門店家-取得資料
    public function get_store_data(Request $request){
        try{
            //取得所有店家資料
            $result = DB::table('t_store_info')->get();

            return $result;
        }catch (\Exception $exception){
            return $exception;
        }
    }
}
