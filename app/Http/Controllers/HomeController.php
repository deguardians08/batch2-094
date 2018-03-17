<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
   public function getHome(){
   		$query = Barang::all();
   		dd($barang);
   }
}
