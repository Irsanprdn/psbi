<?php

namespace App\Imports;

use App\Models\WBS;
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

        // $sql = "SELECT * FROM basic_data WHERE is_delete = 'N' AND  ORDER BY group_id,data_id DESC";
        // $jenisKelamin = DB::select($sql);
        $data = [];
        if ($row[0] != 'No') {
            $data = [
                'nama' => $row[1],
                'jenis_kelamin' => $row[2],
                'umur' => $row[3],
                'status' => $row[4],
                'pendidikan' => $row[5],
                'agama' => $row[6],
                'tanggal_masuk' => date('Y-m-d',strtotime($row[7])),
                'asal' => $row[8],
                'domisili' => $row[9],
                'alamat' => $row[10],
                'hasil_jangkauan' => $row[11],
                'status_pernikahan' => $row[12],
                'klasifikasi' => $row[13],
                'updated_by' => $user,
                'updated_date' => $date,
                'is_delete' => 'N'
            ];
            return new WBS($data);
        }
        
    }
}
