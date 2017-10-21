<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NasabahController extends Controller
{
   public function index(){

      /*$nama = 'Ridwan Hasanah';
      $umur = 23;
      */
      $nasabah = array('Ridwan Hasanah','Ridho','Lukman');

      $data['nama'] = 'Ridwan Hasanah';
      $data['umur'] = 23;

   		return view('nasabah/index',compact('nama','umur','nasabah'));
   }

   public function create(){

   }

   public function store(){

   }

   public function show(){

   }

   public function edit(){

   }

   public function update(){

   }

   public function destory(){

   }

}
