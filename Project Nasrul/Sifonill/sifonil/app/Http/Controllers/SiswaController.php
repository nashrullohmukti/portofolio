<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\grade;
use App\guru;
use App\jurusan;
use App\kelas;
use App\kkm;
use App\mapel_jurusan;
use App\ngajar;
use App\ngajar_pendamping;
use App\nilai;
use App\nilai_desc;
use App\pelajaran;
use App\rombel;
use App\setting;
use App\siswa;
use App\siswa_thnajaran;
use App\thnajaran;
use App\tingkat;
use App\walikelas;

class SiswaController extends Controller
{	
	public function nilaipelajaran($idmapel, $idkelas)
    	{
    		$nilai = nilai::join('ak_siswa','ak_siswa.nis','=','ak_nilai.nis') 
            ->join('ak_siswa_thnajaran','ak_siswa_thnajaran.nis','=','ak_siswa.nis')
    		->where('ak_nilai.idmapel', $idmapel)
            ->where('ak_siswa_thnajaran.idkelas', $idkelas)
            ->get();

    		$mapel = pelajaran::where('idmapel', $idmapel)->get();
    		return View('siswa.nilaipelajaran', compact("nilai","mapel"));
    	}

    public function pelajaran($userid)
    	{
    		// $mapel = pelajaran::join('ak_mapel_jurusan','ak_mapel_jurusan.idmapel','=','ak_mapel.idmapel')
    		// ->join('ak_jurusan','ak_jurusan.idjurusan','=','ak_mapel_jurusan.idjurusan')
    		// ->join('ak_siswa','ak_siswa.jurusan','=','ak_jurusan.idjurusan')
    		// ->where('ak_siswa.nis', '=', $userid)->get();
    		$mapel = pelajaran::join('ak_nilai','ak_nilai.idmapel','=','ak_mapel.idmapel')
    			->where('ak_nilai.nis','=', $userid)
                ->get();
            $kelas = siswa::join('ak_siswa_thnajaran','ak_siswa.nis','=','ak_siswa_thnajaran.nis')
                ->where('ak_siswa.nis', $userid)
                ->select('ak_siswa.*', 'ak_siswa_thnajaran.*')
                ->get();

    		return View('siswa.pelajaran', compact("mapel", "kelas"));
    	}

    public function nilaisiswa($userid)
    	{
    		$nilai = nilai::where('nis', $userid)->get();
    		return View('siswa.nilaisiswa', compact("nilai"));
    	}
    public function detailnilai($idmapel, $userid)
    	{
    		$mapel = pelajaran::where('idmapel', $idmapel)->get();
    		$siswa = siswa::where('nis', $userid)->get();
    		// $nilai = nilai::where('nis', $userid)->where('idmapel', $idmapel)->get();
    		$nilai = nilai::join('ak_nilai_desc','ak_nilai_desc.idnilai','=','ak_nilai.idnilai')
            ->where('ak_nilai.nis', '=' , $userid)
            ->where('ak_nilai.idmapel',"=", $idmapel)
            ->get();
    		return View('siswa.detailnilai', compact("mapel","siswa","nilai"));
    	}
}
