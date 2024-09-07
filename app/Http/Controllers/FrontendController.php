<?php

namespace App\Http\Controllers;

use App\Models\Diases;
use App\Models\Symtomps;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function ragam_penyakit()
    {
        $diases = Diases::orderBy('nama')->get();
        return view('Frontend.ragam-penyakit', compact('diases'));
    }

    public function ragam_gejala()
    {
        $symtomps = Symtomps::orderBy('nama')->get();
        return view('Frontend.ragam-gejala', compact('symtomps'));
    }

    public function showPenyakitForm($id)
    {
        $diases = Diases::findOrFail($id);
        return view('Frontend.penyakit.show', compact('diases'));
    }

    public function show(string $id): View
    {
        //get product by ID
        $diases = Diases::findOrFail($id);

        //render view with product
        return view('Frontend.penyakt.show', compact('diases'));
    }
}
