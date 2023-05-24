<?php

namespace App\Http\Controllers\SuperAdmin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SuperAdmin;
use App\Models\Kelas;
use App\Models\PesertaDidik;
use App\Models\DataCover;
use App\Models\Mapel;
use App\Models\Nilai;

class SuperAdminController extends Controller
{
   
    public function index()
    {
       
        $data ['list_superadmin'] = SuperAdmin::all();
        return view('super-admin.super-admin.index', $data);
    }

    
    public function create()
    {
        return view('super-admin.super-admin.create');
    }

    public function store(Request $request)
    {
        $superadmin = new SuperAdmin();
        $superadmin->nama = request('nama');
        $superadmin->username = request('username');
        $superadmin->email = request('email');
        $superadmin->password = bcrypt(request('password'));
        $superadmin->save();

        return redirect('super-admin/super-admin')->with('success', 'Data berhasil ditambahkan');

    }

    
    public function show($id)
    {
        // 
    }

    public function edit(SuperAdmin $superadmin)
    {
        $data ['superadmin'] = $superadmin;
        return view('super-admin.super-admin.edit', $data);
    }

    
    public function update(SuperAdmin $superadmin)
    {
        $superadmin->nama = request('nama');    
        $superadmin->username = request('username');
        $superadmin->email = request('email');
        if(request('password')) $superadmin->password = bcrypt(request('password'));
        $superadmin->save();

        return redirect('super-admin/super-admin')->with('success', 'Data berhasil diubah');
    }

    
    public function destroy($superadmin)
    {
        SuperAdmin::destroy($superadmin);

        return redirect('super-admin/super-admin');
    }

    public function dashboard()
    {
        
        
        $data['pesertadidik'] = Pesertadidik::all()->count();
        $data['datacover'] = Datacover::all()->count();
        $data['kelas'] = Kelas::all()->count();
        $data['mapel'] = Mapel::all()->count();
        $data['nilai'] = Nilai::all()->count();
        
        return view('super-admin.index', $data);
    
    }
}
