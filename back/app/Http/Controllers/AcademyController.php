<?php

namespace App\Http\Controllers;

use App\academy;
use Illuminate\Http\Request;
use stdClass;

class AcademyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sidebar = Helper::activeSidebar('academy');
        $exbtn = new stdClass;
        $exbtn->name = "پست جدید";
        $exbtn->route = "admin-academy-new";
        return view('administrator.layouts.academy')->with( ["title" => "پنل مدیریت - آکادمی" , 'exbtn'=>$exbtn  , 'sidebar' => $sidebar ,  'posts' => academy::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\academy  $academy
     * @return \Illuminate\Http\Response
     */
    public function show(academy $academy)
    {
        //
    }

    public function showAjax(academy $academy)
    {
        return $academy;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\academy  $academy
     * @return \Illuminate\Http\Response
     */
    public function edit(academy $academy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\academy  $academy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, academy $academy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\academy  $academy
     * @return \Illuminate\Http\Response
     */
    public function destroy(academy $academy)
    {
        $academy->delete();
        session()->flash('success','با موفقیت حذف شد');
        return redirect()->route('admin-academy');
    }
}
