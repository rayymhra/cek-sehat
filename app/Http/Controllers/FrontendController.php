<?php

namespace App\Http\Controllers;

use App\Models\Diases;
use App\Models\Symtomps;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function ragam_penyakit()
    {
        $diases = Diases::orderBy('nama')->get();
        return view('Frontend.ragam-penyakit', compact('diases'));
    }

    public function show(Diases $diases)
    {
        return view('Frontend.penyakit.show', compact('diases'));
    }

    public function ragam_gejala()
    {
        $symtomps = Symtomps::orderBy('nama')->get();
        return view('Frontend.ragam-gejala', compact('symtomps'));
    }

    // public function show(Diases $diases)
    // {
    //     return view('Frontend.penyakit.show', compact('ragam-penyakit'));
    // }

}
