<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\WBS;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function compro()
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

        
        $dataStatus = DB::select("SELECT * FROM basic_data WHERE is_delete = 'N' AND group_id = '000006' ORDER BY data_name ASC");

        $dataHJ = DB::select("SELECT * FROM basic_data WHERE is_delete = 'N' AND group_id = '000004' ORDER BY group_id,data_id DESC");

        return view('index', compact('data', 'dataStatus', 'dataHJ'));
    }

    public function autoNumber($id)
    {
        $id = (int)$id + 1;
        return sprintf("%06s", $id);
    }
}
