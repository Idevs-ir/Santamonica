<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;
use stdClass;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Setting::find(1);
        $sidebar = Helper::activeSidebar('settings');
        return view('administrator.layouts.setting')->with( ["title" => "پنل مدیریت - تنظیمات"  , 'sidebar' => $sidebar ,  'item' =>$setting ]);
    }


    public function show(setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $setting = Setting::find(1);
        $setting->title = $request->title;
        $setting->workat = $request->workat;
        $setting->address = $request->address;
        $setting->phone = $request->phone;
        $setting->email = $request->email;
        $setting->whatsapp = $request->whatsapp;
        $setting->telegram = $request->telegram;
        $setting->twitter = $request->twitter;
        $setting->facebook = $request->facebook;
        $setting->instagram = $request->instagram;
        if(!empty($request->logo))
        {
            $setting->logo = $request->logo->store('public/setting/logo');
        }
        $setting->save();
        session()->flash('success' , 'ویرایش شد');
        return redirect(route('admin-settings'));

    }
}
