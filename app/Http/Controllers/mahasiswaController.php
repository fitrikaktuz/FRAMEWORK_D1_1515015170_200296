<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\mahasiswa;

class mahasiswaController extends Controller
{
  public function awal()
  {
  	return "Hello dari mahasiswaController";
  }
  public function tambah()
  {
  	return $this->simpan();
  }
  public function simpan()
  {
  	$mahasiswa = new mahasiswa();
  	$mahasiswa->nama = 'Sri uswatul';
  	$mahasiswa->nim = '1515015193';
  	$mahasiswa->alamat = 'perjuangan 1';
  	$mahasiswa->pengguna_id = '1';
  	$mahasiswa->save();
    return "data dengan nama {$mahasiswa->nama} telah disimpan";
  }
}
