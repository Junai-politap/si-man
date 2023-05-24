<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\PesertaDidik;



class RegisterController extends Controller{
    function index(){
       
        
        return view('admin.register.index');
    }

    function create(){
       
        return view('admin.register.create');
        
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
        return view('admin.register.cetak_pdf');
    }

    
}