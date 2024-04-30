<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CitizenController extends Controller
{
    public function index(){
        return view('Citizen.home_citizen');
    }
    public function create()
    {
        return view('Acara.create');
    }
    public function rt()
    {
        return view('Citizen.rt');
    }
    public function kk()
    {
        return view('Citizen.kk');
    }
    public function organisasi()
    {
        return view('Citizen.organisasi');
    }
    public function rumah()
    {
        return view('Citizen.rumah');
    }
    public function warga()
    {
        return view('Citizen.warga');
    }
}
