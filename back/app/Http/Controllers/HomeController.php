<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $count = ['videos'=>12 , 'pictures'=>324 , 'academy'=>34 , 'team'=>42 , 'sponser'=>42 ];
        $timestamps = ['videos'=>"12/12/1243" , 'pictures'=>"12/12/1243" , 'academy'=>"12/12/1243" , 'team'=>"12/12/1243" , 'settings'=>"12/12/1243" , 'sponser'=>"12/12/1243"];
        return view('administrator.index')->with( ["title" => "پنل مدیریت - داشبورد" , 'count' => $count , 'timestamps'=>$timestamps ]);
    }
    public function show()
    {
        return view('web.layouts.home')->with( ['setting' => Setting::find(1)]);
    }
}
