<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Welcome extends Controller
{
    
	public function index(){
		$data['tipe'] = 'Artikel';
		$data['jumlah'] = '40';
		return view('content')->with('data',$data);	//Kirim data array dari $data ke view content
	}

}
