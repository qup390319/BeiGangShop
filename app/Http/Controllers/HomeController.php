<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //取得 主畫面
    public function get_home_page()
    {
        return view('common_user.homePage');
    }

    //問題回報 寫入資料庫
    public function insert_problem_data(Request $request)
    {
        try {

            $problem=$request->problem;
            $email=$request->email;

            if(empty($problem)==true) return 'err' ;
            if(empty($email)==true) return 'err' ;

            //店家
            DB::table('t_notifications')
                ->insert([
                    'noti_category' => '問題',
                    'noti_detail' => $problem,
                    'noti_sender_mail' => $email,
                    'noti_time'=>Carbon::now(),
                ]);
            return 'success';
        } catch (\Exception $exception) {
            return $exception;

        }
    }
    //店家推薦 寫入資料庫
    public function insert_comment_data(Request $request)
    {
        try {
//            return $request;
            $comment_store_name=$request->comment_store_name;
            $comment_store_address=$request->comment_store_address;
            $comment_store_phone=$request->comment_store_phone;
//            $comment_name=$request->comment_name;
            $comment_email=$request->comment_email;
            $comment_content=$request->comment_content;

            if(empty($comment_store_name)==true) return 'err' ;
            if(empty($comment_store_address)==true) return 'err' ;
            if(empty($comment_store_phone)==true) return 'err' ;
            if(empty($comment_email)==true) return 'err' ;
            if(empty($comment_content)==true) return 'err' ;

            //店家
            DB::table('t_notifications')
                ->insert([
                    'noti_category' => '推薦'.'-'.$comment_store_name,
                    'noti_detail' => $comment_store_address.'。'.$comment_store_phone.'。'.$comment_content,
                    'noti_sender_mail' => $comment_email,
                    'noti_time'=>Carbon::now(),
                ]);
            return 'success';
        } catch (\Exception $exception) {
            return $exception;

        }
    }
    //店家推薦 寫入資料庫
    public function insert_recommend_data(Request $request)
    {
        try {
//            return $request;
            $recommend_store_name=$request->recommend_store_name;
            $recommend_email=$request->recommend_email;
            $recommend_content=$request->recommend_content;
//
            if(empty($recommend_store_name)==true) return 'err' ;
            if(empty($recommend_email)==true) return 'err' ;
            if(empty($recommend_content)==true) return 'err' ;


            //店家
            DB::table('t_notifications')
                ->insert([
                    'noti_category' => '評論'.'-'.$recommend_store_name,
                    'noti_detail' => $recommend_content,
                    'noti_sender_mail' => $recommend_email,
                    'noti_time'=>Carbon::now(),
                ]);
            return 'success';
        } catch (\Exception $exception) {
            return $exception;

        }
    }
}
