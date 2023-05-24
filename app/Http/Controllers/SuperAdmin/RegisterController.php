<?php
namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\PesertaDidik;



class RegisterSuperController extends Controller{
    function index(){
       
        
        return view('super-admin.register.index');
    }

    function create(){
       
        return view('super-admin.register.create');
        
    }

    function store(){
       

        

      
    }

    function show(){

      
        
    }

    function edit(){
       
      
       
    }

    function update(){
       
     
    
        
    }

    function destroy(){
       
      

       
     
    }
    
    public function cetak_pdf()
    {
        return view('superadmin.register.cetak_pdf');
    }

    
}