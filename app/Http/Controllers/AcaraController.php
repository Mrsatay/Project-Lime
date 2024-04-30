<?php

namespace App\Http\Controllers;

use App\Models\Acara;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AcaraController extends Controller
{
    public function manage()
    {
        return view('Acara.ManageAcara_RW');
    }

    public function view()
    {
        $data = Acara::get();

        return view('Acara.ViewAcara_Warga',compact('data'));
    }

    public function create()
    {
        return view('Acara.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'judul'                     => 'required',
            'deskripsi'                 => 'required',
            'publish_at'                => 'required',
            'tipe_acara'                => 'required',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);
        // dd($request->all());

        $data['judul'] = $request->judul;
        $data['deskripsi'] = $request->deskripsi;
        $data['publish_at'] = $request->publish_at;
        $data['tipe_acara'] = $request->tipe_acara;

        Acara::create($data);

        return redirect()->route('acara.view');
    }
}
