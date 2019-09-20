<?php

namespace App\Http\Controllers;

use App\Http\Requests\PicturePost;
use App\Picture;
use Illuminate\Http\Request;
use stdClass;

class PictureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sidebar = Helper::activeSidebar('pictures');
        $exbtn = new stdClass;
        $exbtn->name = "پست جدید";
        $exbtn->route = "admin-pictures-new";
        return view('administrator.layouts.picture')->with( ["title" => "پنل مدیریت - تصاویر" , 'exbtn'=>$exbtn  , 'sidebar' => $sidebar ,  'posts' => Picture::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sidebar = Helper::activeSidebar('pictures');
        $exbtn = new stdClass;
        $exbtn->name = "لیست پست ها";
        $exbtn->route = "admin-pictures";
        return view('administrator.layouts.picture-new')->with(['type'=>'new' , 'title'=>'پنل مدیریت - پست جدید در تصاویر' , 'exbtn'=>$exbtn  , 'sidebar' => $sidebar]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PicturePost $request)
    {
        $picture = new Picture();
        $picture->image = $request->image->store('public/picture/image');
        $picture->save();
        session()->flash('success' , 'پست جدید اضافه شد');
        return redirect(route('admin-pictures'));
    }

    public function show(Picture $picture)
    {
        //
    }

    public function showAjax(Picture $picture)
    {
        $picture->image = asset($picture->image);
        return $picture;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function edit(Picture $picture)
    {
        $sidebar = Helper::activeSidebar('pictures');
        $exbtn = new stdClass;
        $exbtn->name = "لیست پست ها";
        $exbtn->route = "admin-pictures";
       return view('administrator.layouts.picture-new')->with(['type'=>'edit' , 'item' => $picture , 'title'=>'پنل مدیریت - ویرایش پست در ویدیو ها' , 'exbtn'=>$exbtn  , 'sidebar' => $sidebar]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , Picture $picture)
    {
        if(!empty($request->image))
        {
            $picture->image = $request->image->store('public/picture/image');
        }
        $picture->save();
        session()->flash('success' , 'پست ویرایش شد');
        return redirect(route('admin-pictures'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Picture $picture)
    {
        $picture->delete();
        session()->flash('success','با موفقیت حذف شد');
        return redirect()->route('admin-pictures');
    }
}
