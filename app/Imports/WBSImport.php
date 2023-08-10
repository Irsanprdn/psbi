<?php

namespace App\Imports;

use App\Models\WBS;
use Illuminate\Support\Facades\Crypt;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class WBSImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $user = auth()->user()->fullname;
        $date = date('Y-m-d H:i:s');


        $data = [];
        if ($row[0] != 'No' && $row[0] != null && $row[0] != '' &&  $row[1] != null && $row[1] != '') {
            $foto = $row[15];
            $foto = str_replace('https://drive.google.com/file/d/', '', $foto);
            $foto = str_replace('/view?usp=drive_link', '', $foto);
            $data = [
                'nama' => $row[1],
                'jenis_kelamin' => $row[2],
                'umur' => $row[3],
                'status' => $row[4],
                'pendidikan' => $row[5],
                'agama' => $row[6],
                'tanggal_masuk' => date('Y-m-d', strtotime($row[7])),
                'asal' => $row[8],
                'domisili' => $row[9],
                'alamat' => $row[10],
                'hasil_jangkauan' => $row[11],
                'status_pernikahan' => $row[12],
                'klasifikasi' => $row[13],
                'lokasi' => str_replace('Admin ', '', $user),
                'sumber' => 'Import',
                'foto' => $foto,
                'updated_by' => $user,
                'updated_date' => $date,
                'is_delete' => 'N'
            ];
            return new WBS($data);
        }
    }
}
