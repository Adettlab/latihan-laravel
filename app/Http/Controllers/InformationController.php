<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $name = "Universitas AKI ";
        $alamat = "Jl. Imam Bonjol No.15 - 17, Dadapsari, Kec. Semarang Utara, Kota Semarang, Jawa Tengah 50173";

        $data['kampus'] = $name;
        $data['alamat'] = $alamat;

        return view('informationpage', $data);
    }

}