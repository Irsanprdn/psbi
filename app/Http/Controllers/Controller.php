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

        $sql = " SELECT * FROM home WHERE is_delete = 'N' AND status = 'Publish' ORDER BY idx ASC ";
        $dataHome = DB::select($sql);

        $dataStatus = DB::select(" SELECT * FROM basic_data WHERE is_delete = 'N' AND group_id = '000006' ORDER BY data_name ASC ");

        $dataHJ = DB::select(" SELECT * FROM basic_data WHERE is_delete = 'N' AND group_id = '000004' ORDER BY data_id DESC ");

        $dataSocmed = DB::select(" SELECT * FROM basic_data WHERE is_delete = 'N' AND group_id = '999999' ORDER BY data_id ASC LIMIT 3 ");

        $dataSocmedWA = DB::select(" SELECT * FROM basic_data WHERE is_delete = 'N' AND group_id = '999999'
        AND data_name = 'Whatsapp' ORDER BY data_id ASC ");

        return view('index', compact('dataHome', 'dataStatus', 'dataHJ', 'dataSocmed', 'dataSocmedWA'));
    }


    public function autoNumber($id)
    {
        $id = (int)$id + 1;
        return sprintf("%06s", $id);
    }
}
