<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class BarangController extends Controller
{
   public function getNama(){
   		$barang = Barang::where('nama', 'Henpon')->first();
   		return 'Nama Barang Adalah : ' . $barang->nama;

   }

   public function getAlamat(){
   		return 'Bandung';
   }
}
