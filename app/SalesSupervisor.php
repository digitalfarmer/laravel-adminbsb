<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesSupervisor extends Model
{
    protected $table ='ms_personil';
    protected $id='Kode_Salesman';
    protected $fillabe = [
        'Kode_Personil',
        'Nama_Personil',
        'Kode_Jabatan',
        'Tgl_Masuk',
'Status_Kepegawaian',
'Jenis_Kelamin',
'Status_Perkawinan',
'Telp_Personil',
'NPWP',
'Alamat_Personil',
'Kode_Kota',
'Kode_Kecamatan',
'NA_Personil',
'Kode_Supervisor',
'User_ID',
'Time_Stamp',
'Kode_Salesman_Principal',
'Kode_Principal',
'No_Depo'
    ];
    public $timestamp='false';
}

