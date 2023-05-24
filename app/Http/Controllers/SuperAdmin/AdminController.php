<?php

namespace App\Http\Controllers\SuperAdmin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    
    public function index()
    {
       
        $data ['list_admin'] = Admin::all();
        return view('super-admin.admin.index', $data);
    }

   
    public function create()
    {
        return view('super-admin.admin.create');
    }

    
    public function store(Request $request)
    {
        $admin = new Admin();
        $admin->nama = request('nama');  
        $admin->username = request('username');
        $admin->email = request('email');
        $admin->password = bcrypt(request('password'));
        $admin->save();

        return redirect('super-admin/admin')->with('success', 'Data berhasil ditambahkan');

    }

    
    public function show($id)
    {
        // 
    }

   
    public function edit(Admin $admin)
    {
        $data ['admin'] = $admin;
        return view('super-admin.admin.edit', $data);
    }

    
    public function update(Admin $admin)
    {
        $admin->nama = request('nama');
        $admin->username = request('username');
        $admin->email = request('email');
        
        if(request('password')) $admin->password = bcrypt(request('password'));
        $admin->save();

        return redirect('super-admin/admin')->with('success', 'Data berhasil diubah');
    }

    public function destroy(Admin $admin)
    {
        $admin->delete();

        return redirect('super-admin/admin');
    }
}
