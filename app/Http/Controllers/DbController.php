<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;
use DB;
use App\employees;

class DbController extends Controller
{
    public function index()
    {
        $all = DB::table('employee')->get();
        dd($all);
    }

    public function joining()
    {
        $result = DB::table('orders')
            ->join('user', 'user.id', '=', 'orders.user_id')
            // ->select('orders.order_date', 'user.name', 'user.email')
            // ->where('status', 1)
            ->get();

        dd($result);
    }

    public function modal()
    {
        $result = employee::all();
        dd($result);
    }
}
