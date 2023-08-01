<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
    public function home()
    {

        return view('admin.home');
    }

    public function about_us()
    {

        return view('admin.about_us');
    }
    public function activity()
    {

        return view('admin.activity');
    }
    public function contact()
    {

        return view('admin.contact');
    }
    public function data_wbs()
    {

        return view('admin.data_wbs');
    }
}
