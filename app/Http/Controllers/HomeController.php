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

    public function insert_problem_data(Request $request)
    {
        try {

            $problem=$request->problem;
            $email=$request->email;
            if ($problem == '') {
                return 'err';
            }
            if ($email == '') {
                return 'err';
            }
            //店家
            DB::table('t_notifications')
                ->insert([
                    'noti_category' => '問題回報',
                    'noti_detail' => $problem,
                    'noti_sender_mail' => $email,
                    'noti_time'=>Carbon::now(),
                ]);
            return 'success';
        } catch (\Exception $exception) {
            return $exception;

        }

    }
}
