<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamPost;
use App\Setting;
use App\Team;
use Illuminate\Http\Request;
use stdClass;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sidebar = Helper::activeSidebar('team');
        $exbtn = new stdClass;
        $exbtn->name = "پست جدید";
        $exbtn->route = "admin-team-new";
        return view('administrator.layouts.team')->with( ["title" => "پنل مدیریت - تیم ما" , 'exbtn'=>$exbtn  , 'sidebar' => $sidebar ,  'posts' => Team::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sidebar = Helper::activeSidebar('team');
        $exbtn = new stdClass;
        $exbtn->name = "لیست پست ها";
        $exbtn->route = "admin-team";
        return view('administrator.layouts.team-new')->with(['type'=>'new' , 'title'=>'پنل مدیریت - پست جدید در تیم ما' , 'exbtn'=>$exbtn  , 'sidebar' => $sidebar]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeamPost $request)
    {
        $team = new Team();
        $team->title = $request->title;
        $team->facebook = $request->facebook;
        $team->whatsapp = $request->whatsapp;
        $team->telegram = $request->telegram;
        $team->instagram = $request->instagram;
        $team->image = $request->image->store('public/team/image');
        $team->save();
        session()->flash('success' , 'پست جدید اضافه شد');
        return redirect(route('admin-team'));
    }

    public function show()
    {
        return view('web.layouts.team')->with( ['items' => Team::all() , 'setting' => Setting::find(1)]);
    }

    public function showAjax(Team $team)
    {
        $team->image = asset($team->image);
        return $team;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        $sidebar = Helper::activeSidebar('team');
        $exbtn = new stdClass;
        $exbtn->name = "لیست پست ها";
        $exbtn->route = "admin-team";
       return view('administrator.layouts.team-new')->with(['type'=>'edit' , 'item' => $team , 'title'=>'پنل مدیریت - ویرایش پست در تیم ما' , 'exbtn'=>$exbtn  , 'sidebar' => $sidebar]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $team->title = $request->title;
        $team->facebook = $request->facebook;
        $team->whatsapp = $request->whatsapp;
        $team->telegram = $request->telegram;
        $team->instagram = $request->instagram;
        if(!empty($request->image))
        {
            $team->image = $request->image->store('public/team/image');
        }
        $team->save();
        session()->flash('success' , 'پست ویرایش شد');
        return redirect(route('admin-team'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team->delete();
        session()->flash('success','با موفقیت حذف شد');
        return redirect()->route('admin-team');
    }
}
