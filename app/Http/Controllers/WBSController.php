<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\WBSImport;
use App\Models\WBS;
use Maatwebsite\Excel\Facades\Excel;

class WBSController extends Controller
{

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

        return view('admin.wbs_data.index', compact('data'));
    }

    public function wbs_data_input($id)
    {
        $dataAgama =  DB::select(" SELECT data_id,data_name FROM basic_data WHERE group_id = '000001' ");

        $dataJK =  DB::select(" SELECT data_id,data_name FROM basic_data WHERE group_id = '000002' ");

        $dataPendidikan =  DB::select(" SELECT data_id,data_name FROM basic_data WHERE group_id = '000003' ");

        $dataHJ =  DB::select(" SELECT data_id,data_name FROM basic_data WHERE group_id = '000004' ");

        $dataSP =  DB::select(" SELECT data_id,data_name FROM basic_data WHERE group_id = '000005' ");

        $dataStatus =  DB::select(" SELECT data_id,data_name FROM basic_data WHERE group_id = '000006' ");

        $dataKota =  DB::select(" SELECT id,name FROM regencies ");

        return view('admin.wbs_data.create', compact('dataAgama', 'dataJK', 'dataPendidikan', 'dataHJ', 'dataSP', 'dataStatus', 'id', 'dataKota'));
    }

    public function wbs_search_post(Request $req,$id)
    {
        if ( $id == 0 ) { //create
            
        }else{ //update

        }

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
}
