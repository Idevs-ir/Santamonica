<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Helper extends Controller
{
    static function activeSidebar($name)
    {
        $sidebar = array();
        $sidebar['videos']='';
        $sidebar['pictures']='';
        $sidebar['team']='';
        $sidebar['settings']='';
        $sidebar['academy']='';
        $sidebar['sponser']='';
        $sidebar[$name]='active';
        return (object) $sidebar;
    }
}
