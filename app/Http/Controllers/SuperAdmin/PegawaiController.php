<?php

namespace App\Http\Controllers\SuperAdmin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
   
    public function index()
    {
       
        $data ['list_pegawai'] = Pegawai::all();
        return view('super-admin.pegawai.index', $data);
    }

    
    public function create()
    {
        return view('super-admin.pegawai.create');
    }

   
    public function store(Request $request)
    {
        $pegawai = new Pegawai();
        $pegawai->nama = request('nama');
        $pegawai->username = request('username');
        $pegawai->email = request('email');
        $pegawai->password = bcrypt(request('password'));
        $pegawai->save();

        return redirect('super-admin/pegawai')->with('success', 'Data berhasil ditambahkan');

    }

    public function show($id)
    {
        // 
    }

   
    public function edit($pegawai)
    {
        $data ['pegawai'] = Pegawai::find($pegawai);
        return view('super-admin.pegawai.edit', $data);
    }

   
    public function update(Pegawai $pegawai)
    {
        $pegawai->nama = request('nama'); 
        $pegawai->username = request('username');
        $pegawai->email = request('email');
        if(request('password')) $pegawai->password = bcrypt(request('password'));
        $pegawai->save();

        return redirect('super-admin/pegawai')->with('success', 'Data berhasil diubah');
    }

    
    public function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();

        return redirect('super-admin/pegawai');
    }
}
