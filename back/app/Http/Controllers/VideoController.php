<?php

namespace App\Http\Controllers;

use App\Video;
use App\Http\Requests\VideoPost;
use Illuminate\Http\Request;
use stdClass;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sidebar = Helper::activeSidebar('videos');
        $exbtn = new stdClass;
        $exbtn->name = "پست جدید";
        $exbtn->route = "admin-videos-new";
        return view('administrator.layouts.video')->with( ["title" => "پنل مدیریت - ویدیو" , 'exbtn'=>$exbtn  , 'sidebar' => $sidebar ,  'posts' => Video::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sidebar = Helper::activeSidebar('videos');
        $exbtn = new stdClass;
        $exbtn->name = "لیست پست ها";
        $exbtn->route = "admin-videos";
        return view('administrator.layouts.video-new')->with(['type'=>'new' , 'title'=>'پنل مدیریت - پست جدید در ویدیوها' , 'exbtn'=>$exbtn  , 'sidebar' => $sidebar]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VideoPost $request)
    {
        $video = new Video();
        $video->poster = $request->poster->store('public/video/poster');
        $video->video = $request->videofile->store('public/video/video');
        $video->save();
        session()->flash('success' , 'پست جدید اضافه شد');
        return redirect(route('admin-videos'));
    }

    public function show(Video $video)
    {
        //
    }

    public function showAjax(Video $video)
    {
        $video->poster = asset($video->poster);
        $video->video = asset($video->video);
        return $video;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        $sidebar = Helper::activeSidebar('videos');
        $exbtn = new stdClass;
        $exbtn->name = "لیست پست ها";
        $exbtn->route = "admin-videos";
       return view('administrator.layouts.video-new')->with(['type'=>'edit' , 'item' => $video , 'title'=>'پنل مدیریت - ویرایش پست در ویدیو ها' , 'exbtn'=>$exbtn  , 'sidebar' => $sidebar]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , Video $video)
    {
        if(!empty($request->poster))
        {
            $video->poster = $request->poster->store('public/video/poster');
        }
        if(!empty($request->videofile))
        {
            $video->video = $request->videofile->store('public/video/video');
        }
        $video->save();
        session()->flash('success' , 'پست ویرایش شد');
        return redirect(route('admin-videos'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        $video->delete();
        session()->flash('success','با موفقیت حذف شد');
        return redirect()->route('admin-videos');
    }
}
