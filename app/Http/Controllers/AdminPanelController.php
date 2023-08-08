<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

        $sql = "SELECT * FROM basic_data WHERE is_delete = 'N' ORDER BY group_id,data_id DESC";
        $data = DB::select($sql);

        $sqListGroup = "SELECT group_id,group_name FROM basic_data WHERE is_delete = 'N' GROUP BY group_id,group_name ";
        $dataListGroup = DB::select($sqListGroup);

        return view('admin.master_data', compact('data', 'dataListGroup'));
    }

    public function master_data_edit(Request $req)
    {
        $data = "";
        $code = 404;

        $sql = "SELECT * FROM basic_data WHERE is_delete = 'N' AND group_id = '" . $req->groupId . "' AND data_id = '" . $req->dataId . "' ";
        $data = DB::select($sql);

        $code =  ($data ?  200 : $code);

        return response()->json([
            'data' => $data,
            'code' => $code
        ]);
    }

    public function master_data_post(Request $req)
    {
        $groupId =  "";
        $groupName =  "";
        $dataId =  "";

        $user = auth()->user()->fullname;
        $date = date('Y-m-d H:i:s');


        if ($req->groupId != '') {

            $sqlUpd = DB::update(" UPDATE basic_data SET  group_id = '" . $req->groupId . "',  data_name = '" . $req->data . "', note = '" . $req->note . "', updated_by = '" . $user . "', updated_date =  '" . $date . "' WHERE is_delete = 'N' AND  group_id = '" . $req->groupId . "' AND data_id = '" . $req->dataId . "' ");

            if ($sqlUpd) {
                return redirect()->route('master_data')->with('success', 'Data berhasil diubah');
            } else {

                return redirect()->route('master_data')->with('error', 'Data gagal diubah');
            }
        }


        if ($req->grup == 'another') {
            $dataLastGroup = collect(DB::select(" SELECT group_id FROM basic_data WHERE is_delete = 'N' GROUP BY group_id ORDER BY group_id DESC "))->first();
            $groupId = $dataLastGroup->group_id ?? '';
            $groupId = ($groupId == '' ? '000001' : (new Controller)->autoNumber($groupId));
            $groupName =  $req->newGroup;

            $dataId =  "000001";
        } else {

            $grupArr = explode('!', $req->grup);
            $groupId =  $grupArr[0];
            $groupName =  $grupArr[1];

            $dataLastBasic = collect(DB::select(" SELECT data_id FROM basic_data WHERE is_delete = 'N' AND group_id = '" . $groupId . "' GROUP BY data_id ORDER BY data_id DESC "))->first();
            $dataId = $dataLastBasic->data_id ?? '';
            $dataId = ($dataId == '' ? '000001' : (new Controller)->autoNumber($dataId));
        }



        $sqlIns = DB::insert(" INSERT INTO basic_data ( group_id, group_name, data_id, data_name, note, updated_by, updated_date ) VALUES ('" . $groupId . "', '" . $groupName . "' , '" . $dataId . "', '" . $req->data . "', '" . $req->note . "', '" . $user . "', '" . $date . "' ) ");

        if ($sqlIns) {

            return redirect()->route('master_data')->with('success', 'Data berhasil disimpan');
        } else {

            return redirect()->route('master_data')->with('error', 'Data gagal disimpan');
        }
    }

    public function master_data_delete($groupId, $dataId)
    {
        $user = auth()->user()->fullname;
        $date = date('Y-m-d H:i:s');
        $sqlUpd = DB::update(" UPDATE basic_data SET  is_delete = 'Y', updated_by = '" . $user . "', updated_date =  '" . $date . "' WHERE  is_delete = 'N' AND group_id = '" . $groupId . "' AND data_id = '" . $dataId . "' ");

        if ($sqlUpd) {

            return redirect()->route('master_data')->with('success', 'Data berhasil dihapus');
        } else {

            return redirect()->route('master_data')->with('error', 'Data gagal dihapus');
        }
    }
}
