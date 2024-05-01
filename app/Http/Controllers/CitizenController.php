<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Rt;


class CitizenController extends Controller
{
    public function index(){
        return view('Citizen.home_citizen');
    }
    public function create()
    {
        return view('Acara.create');
    }
    

    //RT
    public function rt()
    {
        $data = Rt::get();

        return view('Citizen.rt',compact('data'));
    }
    public function create_rt()
    {
        return view('citizen.create_rt');
    }
    public function store_rt(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nama_ketua' => 'required',
            'no_rt' => 'required',
            'mulai_masa_jabatan' => 'required',
            'berakhir_masa_jabatan' => 'required',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        // $data['nama_field_di_database'] = $request->nama_di_inputan;
        $data['nama_ketua'] = $request->nama_ketua; 
        $data['no_rt'] = $request->no_rt; 
        $data['mulai_masa_jabatan'] =  $request->mulai_masa_jabatan;
        $data['berakhir_masa_jabatan'] =  $request->berakhir_masa_jabatan;

        Rt::create($data);

        return redirect()->route('citizen.rt');
    }
    public function edit_rt(Request $request,$id)
    {   
        $data = Rt::find($id);
        
        return view('Citizen.edit_rt',compact('data'));
    }
    public function update_rt(Request $request,$id)
    {
        $validator = Validator::make($request->all(),[
            'nama_ketua' => 'required',
            'no_rt' => 'required',
            'mulai_masa_jabatan' => 'required',
            'berakhir_masa_jabatan' => 'required',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        // $data['nama_field_di_database'] = $request->nama_di_inputan;
        $data['nama_ketua'] = $request->nama_ketua; 
        $data['no_rt'] = $request->no_rt; 
        $data['mulai_masa_jabatan'] =  $request->mulai_masa_jabatan;
        $data['berakhir_masa_jabatan'] =  $request->berakhir_masa_jabatan;

        Rt::where('rt_id',$id)->update($data);

        return redirect()->route('citizen.rt');
    }

    public function delete_rt(Request $request,$id)
    {
        $data = Rt::find($id);

        if($data){
            $data->delete();
        }

        return redirect()->route('citizen.rt');
    }


    // KK
    public function kk()
    {
        return view('Citizen.kk');
    }


    // ORGANISASI
    public function organisasi()
    {
        return view('Citizen.organisasi');
    }


    // RUMAH
    public function rumah()
    {
        return view('Citizen.rumah');
    }


    // WARGA
    public function warga()
    {
        return view('Citizen.warga');
    }
}
