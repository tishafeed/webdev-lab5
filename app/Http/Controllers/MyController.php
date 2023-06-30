<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Sample12;
use function PHPUnit\Framework\matches;

class MyController extends Controller
{
    public function work_get($var): string
    {
        return "You are at $var, welcome!";
    }
    public function work_post() {

    }

    public function users_data_post(Request $request) {
        $username = $request->input('username');
        $password = $request->input('password');
        $user = DB::table('users')->where('username', '=', "$username");
        if (!empty($user)) {
            $real_pass = $user[$password];
            if ($real_pass == $password) {
                return redirect('users/mypage');
            } else {
                return view('error_password.php');
            }
        }
        else {
            return view('error_username.php');
        }
    }

}
