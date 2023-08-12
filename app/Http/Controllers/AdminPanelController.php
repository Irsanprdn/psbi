<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\WBSImport;
use App\Models\WBS;
use Maatwebsite\Excel\Facades\Excel;

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
        $data = WBS::select(
            DB::raw('nomor_panti, nama,
            jenis_kelamin,
            umur,
            status,
            pendidikan,
            tanggal_masuk,
            agama,
            asal,
            domisili,
            alamat,
            hasil_jangkauan,
            status_pernikahan,
            klasifikasi,
            lokasi,
            sumber,
            foto,
            wbs.updated_by,
            wbs.updated_date,
            wbs.is_delete, 
            IFNULL(`bsAgama`.data_name,agama) as agamaNm,
            IFNULL(`bsJK`.data_name,jenis_kelamin) as jkNm, 
            IFNULL(`bsPendidikan`.data_name,pendidikan) as pendidikanNm, 
            IFNULL(`bsHJ`.data_name,hasil_jangkauan) as hjNm, 
            IFNULL(`bsSP`.data_name,status_pernikahan) as spNm, 
            IFNULL(`bsStatus`.data_name,status) as statusNm 
            ')

        )
            ->leftJoin('basic_data as bsAgama', function ($join1) {
                $join1->on('bsAgama.group_id', '=', DB::raw("'000001'"));
                $join1->on('wbs.agama', '=', 'bsAgama.data_id');
            })
            ->leftJoin('basic_data as bsJK', function ($join2) {
                $join2->on('bsJK.group_id', '=', DB::raw("'000002'"));
                $join2->on('wbs.agama', '=', 'bsJK.data_id');
            })
            ->leftJoin('basic_data as bsPendidikan', function ($join3) {
                $join3->on('bsPendidikan.group_id', '=', DB::raw("'000003'"));
                $join3->on('wbs.agama', '=', 'bsPendidikan.data_id');
            })
            ->leftJoin('basic_data as bsHJ', function ($join4) {
                $join4->on('bsHJ.group_id', '=', DB::raw("'000004'"));
                $join4->on('wbs.agama', '=', 'bsHJ.data_id');
            })
            ->leftJoin('basic_data as bsSP', function ($join5) {
                $join5->on('bsSP.group_id', '=', DB::raw("'000005'"));
                $join5->on('wbs.agama', '=', 'bsSP.data_id');
            })
            ->leftJoin('basic_data as bsStatus', function ($join6) {
                $join6->on('bsStatus.group_id', '=', DB::raw("'000006'"));
                $join6->on('wbs.agama', '=', 'bsStatus.data_id');
            })
            ->where('wbs.is_delete', 'N')->get();

        return view('admin.wbs_data', compact('data'));
    }

    public function wbs_search(Request $req)
    {
        $val = $req->val ?? '';
        $hj = $req->hj ?? '';
        $status = $req->status ?? '';
        $data = "";
        $code = 500;

        $data = WBS::select(
            DB::raw('nomor_panti, nama, jenis_kelamin, umur, status, pendidikan, tanggal_masuk, agama, asal, domisili, alamat, hasil_jangkauan, status_pernikahan, klasifikasi, lokasi, sumber, foto, wbs.updated_by, wbs.updated_date, wbs.is_delete, 
            IFNULL(`bsAgama`.data_name,agama) as agamaNm,
            IFNULL(`bsJK`.data_name,jenis_kelamin) as jkNm, 
            IFNULL(`bsPendidikan`.data_name,pendidikan) as pendidikanNm, 
            IFNULL(`bsHJ`.data_name,hasil_jangkauan) as hjNm, 
            IFNULL(`bsSP`.data_name,status_pernikahan) as spNm, 
            IFNULL(`bsStatus`.data_name,status) as statusNm             
            ')

        )
            ->leftJoin('basic_data as bsAgama', function ($join1) {
                $join1->on('bsAgama.group_id', '=', DB::raw("'000001'"));
                $join1->on('wbs.agama', '=', 'bsAgama.data_id');
            })
            ->leftJoin('basic_data as bsJK', function ($join2) {
                $join2->on('bsJK.group_id', '=', DB::raw("'000002'"));
                $join2->on('wbs.agama', '=', 'bsJK.data_id');
            })
            ->leftJoin('basic_data as bsPendidikan', function ($join3) {
                $join3->on('bsPendidikan.group_id', '=', DB::raw("'000003'"));
                $join3->on('wbs.agama', '=', 'bsPendidikan.data_id');
            })
            ->leftJoin('basic_data as bsHJ', function ($join4) {
                $join4->on('bsHJ.group_id', '=', DB::raw("'000004'"));
                $join4->on('wbs.agama', '=', 'bsHJ.data_id');
            })
            ->leftJoin('basic_data as bsSP', function ($join5) {
                $join5->on('bsSP.group_id', '=', DB::raw("'000005'"));
                $join5->on('wbs.agama', '=', 'bsSP.data_id');
            })
            ->leftJoin('basic_data as bsStatus', function ($join6) {
                $join6->on('bsStatus.group_id', '=', DB::raw("'000006'"));
                $join6->on('wbs.agama', '=', 'bsStatus.data_id');
            })
            ->where('wbs.is_delete', 'N')
            ->whereRaw(" CONCAT_WS('-', nama, jenis_kelamin, umur, status, pendidikan, agama, tanggal_masuk, asal, domisili, alamat, hasil_jangkauan, status_pernikahan, klasifikasi, lokasi) LIKE '%" . $val . "%' ");
        if ($status != '') {
            $data = $data->where('bsStatus.data_name', $status);
        }
        if ($hj != '') {
            $data = $data->where('bsHj.data_name', $hj);
        }
        $data = $data->get();
        
        $code =  (count($data) > 0 ?  200 : $code);

        return response()->json([
            'data' => $data,
            'code' => $code
        ]);
    }

    public function wbs_data_import(Request $req)
    {

        // menangkap file excel
        $file = $req->file('importData');
        // DD($file);
        // membuat nama file unik
        $nama_file = rand() . $file->getClientOriginalName();

        // upload ke folder file_siswa di dalam folder public
        $file->move('public/uploads/file_WBS', $nama_file);

        // import data
        $importAct = Excel::import(new WBSImport(), public_path('/uploads/file_WBS/' . $nama_file));

        if ($importAct) {
            return redirect()->route('wbs_data')->with('success', 'Data berhasil diimport');
        } else {
            return redirect()->route('wbs_data')->with('error', 'Data gagal diimport');
        }
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
