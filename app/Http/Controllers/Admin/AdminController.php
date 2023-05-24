<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\PesertaDidik;
use App\Models\DataCover;
use App\Models\Mapel;
use App\Models\Nilai;
use App\Models\Admin;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $data['pesertadidik'] = Pesertadidik::all()->count();
        $data['datacover'] = Datacover::all()->count();
        $data['kelas'] = Kelas::all()->count();
        $data['mapel'] = Mapel::all()->count();
        $data['nilai'] = Nilai::all()->count();
        
        return view('admin.index', $data);
    }

}
