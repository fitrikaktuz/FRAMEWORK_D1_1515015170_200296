<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\mahasiswaa;

class MahasiswaaController extends Controller
{
    public function awal()
    {
    	return "Hello dari MahasiswaaController";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$mahasiswaa = new mahasiswaa();
    	$mahasiswaa->nama = 'fitriani';
    	$mahasiswaa->nim = '1515015170';
    	$mahasiswaa->alamat = 'karya baru';
    	$mahasiswaa->pengguna_id = '001';
    	$mahasiswaa->save();
    	return "data dengan nama {$mahasiswaa->nama} telah disimpan";
    }
}
