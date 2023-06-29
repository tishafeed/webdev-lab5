<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sample12;

class MyController extends Controller
{
    public function work_get($var): string
    {
        return "You are at $var, welcome!";
    }
    public function work_post() {

    }

}
