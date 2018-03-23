<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('rule:AdminWeb,nothingelse');
    }

    public function getSidebarSetting() {
      return view('sidebar.index');
    }


}
