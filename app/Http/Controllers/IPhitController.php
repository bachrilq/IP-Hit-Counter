<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class IPhitController extends Controller
{
    public function index(Request $request){
        $user_ip_address=$request->ip();
        DB::insert('insert into ip_table ( ip ) values ( ? )', [$user_ip_address]);

        $hit_count=DB::table('ip_table')->where('ip',$user_ip_address)->count();

        echo "User address =".$user_ip_address. "<br>Hits = ".$hit_count;
    }
}
