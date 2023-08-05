<?php

namespace App\Http\Controllers;

use DB;
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
    public function wbs_data()
    {

        return view('admin.wbs_data');
    }

    public function master_data()
    {

        $sql = "SELECT * FROM basic_data ";
        $data = DB::select($sql);

        $sqListGroup = "SELECT group_id,group_name FROM basic_data GROUP BY group_id,group_name ";
        $dataListGroup = DB::select($sqListGroup);

        return view('admin.master_data',compact('data', 'dataListGroup'));
    }
}
