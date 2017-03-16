<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\matakuliah;

class MatakuliahController extends Controller
{
    public function awal()
    {
    	return "Hello dari MatakuliahController";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$matakuliah = new matakuliah();
    	$matakuliah->title = 'SMBD';
    	$matakuliah->keterangan = 'Wajib';
    	$matakuliah->save();
    	return "data dengan title {$matakuliah->title} telah disimpan";
    }
}


