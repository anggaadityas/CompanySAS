<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class CompanyController extends Controller
{
    
    public function home(){

        $id_kategori = 1; // Quality Service 1
        $queryartikel ='select * from tb_artikel where id_kategori = ?';
        $artikel = DB::SELECT($queryartikel,array($id_kategori));
        
        $queryslider ='select * from tb_slider';
        $slider = DB::SELECT($queryslider);
         
        return view('pages.home',compact('artikel','slider'));
    }

    public function visimisi(){
    	return view('pages.visidanmisi');
    }

    public function galeri(){
         
        $query ='select * from tb_galery';
        $galeri = DB::SELECT($query);
         
        return view('pages.galeri',compact('galeri'));
    }

    public function artikel(){

        $artikel = DB::table('tb_artikel')->paginate(2);

        return view('pages.artikel',compact('artikel'));
    }

    public function detailartikel($slug){

        $detart = DB::table('tb_artikel')->where('slug','=', $slug)->get();

      return view('pages.detailartikel',compact('detart'));
    }

    public function tpk(){
    	return view('pages.tpk');
    }

    public function karir(){
        
        $query = "SELECT * FROM tb_loker";
        $loker = DB::SELECT($query);
        
    	return view('pages.karir',compact('loker'));
    }

    public function kontak(){
    	return view('pages.kontak');
    }

}
