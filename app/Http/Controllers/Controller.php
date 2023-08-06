<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function compro()
    {
        return view('index');
    }

    public function autoNumber($id)
    {
        $id = $id + 1;
        $jumlahId = strlen($id);
        $jumlahAngka = 6 - $jumlahId;
        return sprintf("%0".$jumlahAngka."s",$id);
    }
}
