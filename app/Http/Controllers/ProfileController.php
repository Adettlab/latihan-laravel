<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $name ="Aditya Eka Pradana Raharjo ";
        $lokasi="Semarang";
        $mitra="Gits FullStack Dev";

        $data['nama']= $name;
        $data['lokasi']=$lokasi;
        $data['mitra']=$mitra;
        
        return view('profilepage',$data);
    }
}
