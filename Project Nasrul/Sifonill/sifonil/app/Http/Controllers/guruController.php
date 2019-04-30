<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
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


class guruController extends Controller
{
    public function daftarkelas($iduser)
    {
    		$kelas = kelas::join('ak_ngajar','ak_ngajar.idkelas','=','ak_kelas.idkelas')
    		->where('ak_ngajar.nip','=', $iduser)
    		->get();
    		return View('guru.daftarkelas', compact("kelas"));
    }

    public function lihatkelas($idkelas)
    {
    		$siswa = siswa::join('ak_siswa_thnajaran','ak_siswa_thnajaran.nis','=','ak_siswa.nis')
    		->join('ak_kelas','ak_kelas.idkelas','=','ak_siswa_thnajaran.idkelas')
    		->where('ak_kelas.idkelas','=', $idkelas)
    		->get();
    		return View('guru.lihatkelas', compact("siswa"));
    }

    public function tambahnilai($iduser)
    {
    		$kelas = DB::table('ak_kelas')
    		->join('ak_ngajar','ak_ngajar.idkelas','=','ak_kelas.idkelas')
    		->where('ak_ngajar.nip','=',$iduser)
    		->select('ak_kelas.*','ak_ngajar.idmapel')
    		->get();

    		return View('guru.tambahnilai', compact("kelas"));
    }

    public function tambahnilaikelas($idkelas, $idmapel)
    {
    	
    		$siswa = DB::table('ak_siswa')
    		->join('ak_nilai','ak_nilai.nis','=','ak_siswa.nis')
    		->join('ak_nilai_desc','ak_nilai_desc.idnilai','=','ak_nilai.idnilai')
    		->join('ak_siswa_thnajaran','ak_siswa_thnajaran.nis','=','ak_siswa.nis')
    		->join('ak_kelas','ak_kelas.idkelas','=','ak_siswa_thnajaran.idkelas')
    		->where('ak_kelas.idkelas','=', $idkelas)
    		->where('ak_nilai.idmapel','=',$idmapel)
    		->select('ak_siswa.*', 'ak_nilai.*', 'ak_nilai_desc.*')
    		->get();

    		return View('guru.tambahnilaikelas', compact("siswa"));
    }

    public function kosongkannilai($iduser)
    {
    	    $kelas = DB::table('ak_kelas')
    		->join('ak_ngajar','ak_ngajar.idkelas','=','ak_kelas.idkelas')
    		->where('ak_ngajar.nip','=',$iduser)
    		->select('ak_kelas.*','ak_ngajar.idmapel')
    		->get();

    		return View('guru.kosongkannilai', compact("kelas"));
    }

    public function kosongkannilaikelas($idkelas, $idmapel)
    {
    	DB::table('ak_nilai')
    		->join('ak_siswa_thnajaran','ak_siswa_thnajaran.nis','=','ak_nilai.nis')
    		->join('ak_nilai_desc','ak_nilai_desc.idnilai','=','ak_nilai.idnilai')
            ->where('ak_siswa_thnajaran.idkelas', $idkelas)
            ->where('ak_nilai.idmapel', $idmapel)
            ->update(['ak_nilai.sikap' => 'C','ak_nilai.pengetahuan' => 0, 'ak_nilai.keterampilan' => 0, 'ak_nilai_desc.desc_keterampilan' => '-', 'ak_nilai_desc.desc_pengetahuan' => '-', 'ak_nilai_desc.desc_sikap' => '-']);
    	return redirect()->back();
    }

    public function editnilai($iduser)
    {
    		$kelas = DB::table('ak_kelas')
    		->join('ak_ngajar','ak_ngajar.idkelas','=','ak_kelas.idkelas')
    		->where('ak_ngajar.nip','=',$iduser)
    		->select('ak_kelas.*','ak_ngajar.idmapel')
    		->get();

    		return View('guru.editnilai', compact("kelas"));
    }

    public function editnilaikelas($idkelas, $idmapel)
    {
    	
    		$siswa = DB::table('ak_siswa')
    		->join('ak_nilai','ak_nilai.nis','=','ak_siswa.nis')
    		->join('ak_nilai_desc','ak_nilai_desc.idnilai','=','ak_nilai.idnilai')
    		->join('ak_siswa_thnajaran','ak_siswa_thnajaran.nis','=','ak_siswa.nis')
    		->join('ak_kelas','ak_kelas.idkelas','=','ak_siswa_thnajaran.idkelas')
    		->where('ak_kelas.idkelas','=', $idkelas)
    		->where('ak_nilai.idmapel','=',$idmapel)
    		->select('ak_siswa.*', 'ak_nilai.*', 'ak_nilai_desc.*')
    		->get();

    		return View('guru.editnilaikelas', compact("siswa"));
    }

    public function update($idmapel, $nis, Request $request)
    {
    	$pengetahuan = $request->input('pengetahuan');
    	$keterampilan = $request->input('keterampilan');
    	$sikap = $request->input('sikap');
    	$desc_keterampilan = $request->input('desc_keterampilan');
    	$desc_pengetahuan = $request->input('desc_pengetahuan');
    	$desc_sikap = $request->input('desc_sikap');
    	DB::table('ak_nilai')
    		->join('ak_siswa_thnajaran','ak_siswa_thnajaran.nis','=','ak_nilai.nis')
    		->join('ak_nilai_desc','ak_nilai_desc.idnilai','=','ak_nilai.idnilai')
            ->where('ak_nilai.nis', $nis)
            ->update(['ak_nilai.sikap' => $sikap,'ak_nilai.pengetahuan' => $pengetahuan, 'ak_nilai.keterampilan' => $keterampilan, 'ak_nilai_desc.desc_keterampilan' => $desc_keterampilan, 'ak_nilai_desc.desc_pengetahuan' => $desc_pengetahuan, 'ak_nilai_desc.desc_sikap' => $desc_sikap]);
    	return redirect()->back();
    }

}
