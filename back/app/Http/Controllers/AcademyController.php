<?php

namespace App\Http\Controllers;

use App\academy;
use App\Http\Requests\AcademyPost;
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
        $sidebar = Helper::activeSidebar('academy');
        $exbtn = new stdClass;
        $exbtn->name = "لیست پست ها";
        $exbtn->route = "admin-academy";
        return view('administrator.layouts.academy-new')->with(['type'=>'new' , 'title'=>'پنل مدیریت - پست جدید در آکادمی' , 'exbtn'=>$exbtn  , 'sidebar' => $sidebar]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AcademyPost $request)
    {
        $academy = new academy();
        $academy->title = $request->title;
        $academy->description = $request->description;
        $academy->poster = $request->poster->store('public/academy/poster');
        $academy->video = $request->video->store('public/academy/video');
        $academy->save();
        session()->flash('success' , 'پست جدید اضافه شد');
        return redirect(route('admin-academy'));
    }

    public function show(academy $academy)
    {
        //
    }

    public function showAjax(academy $academy)
    {
        $academy->poster = asset($academy->poster);
        $academy->video = asset($academy->video);
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
        $sidebar = Helper::activeSidebar('academy');
        $exbtn = new stdClass;
        $exbtn->name = "لیست پست ها";
        $exbtn->route = "admin-academy";
       return view('administrator.layouts.academy-new')->with(['type'=>'edit' , 'item' => $academy , 'title'=>'پنل مدیریت - ویرایش پست در آکادمی' , 'exbtn'=>$exbtn  , 'sidebar' => $sidebar]);
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
        $academy->title = $request->title;
        $academy->description = $request->description;
        if(!empty($request->poster))
        {
            $academy->poster = $request->poster->store('public/academy/poster');
        }
        if(!empty($request->video))
        {
            $academy->video = $request->video->store('public/academy/video');
        }
        $academy->save();
        session()->flash('success' , 'پست ویرایش شد');
        return redirect(route('admin-academy'));
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
