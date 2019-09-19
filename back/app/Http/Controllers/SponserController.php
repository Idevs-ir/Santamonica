<?php

namespace App\Http\Controllers;

use App\Http\Requests\SponserPost;
use App\Sponser;
use Illuminate\Http\Request;
use stdClass;

class SponserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sidebar = Helper::activeSidebar('sponser');
        $exbtn = new stdClass;
        $exbtn->name = "پست جدید";
        $exbtn->route = "admin-sponser-new";
        return view('administrator.layouts.sponser')->with( ["title" => "پنل مدیریت - همکاران" , 'exbtn'=>$exbtn  , 'sidebar' => $sidebar ,  'posts' => Sponser::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sidebar = Helper::activeSidebar('sponser');
        $exbtn = new stdClass;
        $exbtn->name = "لیست پست ها";
        $exbtn->route = "admin-sponser";
        return view('administrator.layouts.sponser-new')->with(['type'=>'new' , 'title'=>'پنل مدیریت - پست جدید در همکاران' , 'exbtn'=>$exbtn  , 'sidebar' => $sidebar]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SponserPost $request)
    {
        $sponser = new Sponser();
        $sponser->image = $request->image->store('public/sponser/image');
        $sponser->save();
        session()->flash('success' , 'پست جدید اضافه شد');
        return redirect(route('admin-sponser'));
    }

    public function show(Sponser $sponser)
    {
        //
    }

    public function showAjax(Sponser $sponser)
    {
        $sponser->image = asset($sponser->image);
        return $sponser;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\sponser  $sponser
     * @return \Illuminate\Http\Response
     */
    public function edit(Sponser $sponser)
    {
        $sidebar = Helper::activeSidebar('sponser');
        $exbtn = new stdClass;
        $exbtn->name = "لیست پست ها";
        $exbtn->route = "admin-sponser";
       return view('administrator.layouts.sponser-new')->with(['type'=>'edit' , 'item' => $sponser , 'title'=>'پنل مدیریت - ویرایش پست در همکاران' , 'exbtn'=>$exbtn  , 'sidebar' => $sidebar]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\sponser  $sponser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , Sponser $sponser)
    {
        if(!empty($request->image))
        {
            $sponser->image = $request->image->store('public/sponser/image');
        }
        $sponser->save();
        session()->flash('success' , 'پست ویرایش شد');
        return redirect(route('admin-sponser'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\sponser  $sponser
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sponser $sponser)
    {
        $sponser->delete();
        session()->flash('success','با موفقیت حذف شد');
        return redirect()->route('admin-sponser');
    }
}
