<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\dosen;

class DosenController extends Controller
{
    public function awal()
    {
    	return "Hello dari DosenController";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$dosen = new dosen();
    	$dosen->id='D01';
    	$dosen->nama = 'Edy Budiman';
    	$dosen->nip = '19800404';
    	$dosen->alamat = 'gelatik';
    	$dosen->pengguna_id = '001';
    	$dosen->save();
    	return "data dengan nama {$dosen->nama} telah disimpan";
    }
}
