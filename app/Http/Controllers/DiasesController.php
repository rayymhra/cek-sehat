<?php

namespace App\Http\Controllers;

use App\Models\Diases;
use App\Models\Symtomps;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DiasesController extends Controller
{
    public function index()
    {
        $diases = Diases::all();
        $symtomps = Symtomps::all(); // tambahkan kode ini 
        return view('backend.diases.index', compact('diases', 'symtomps'));
    }

    public function create()
    {
        $symtomps = Symtomps::all();
        return view('backend.diases.create', compact('symtomps'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'description' => 'required|string',
            'treatment' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $diases = new Diases();
        $diases->nama = $request->input('nama');
        $diases->description = $request->input('description');
        $diases->treatment = $request->input('treatment');
        $diases->symtomp_id = $request->input('symtomp_id'); 
        $diases->save();
        return redirect()->route('backend.diases.index');
    }

    public function show($id)
    {
        $diases = Diases::find($id);
        return view('backend.diases.show', compact('diases'));
    }

    public function edit($id)
    {
        $diases = Diases::find($id);
        $symtomps = Symtomps::all();
        return view('backend.diases.edit', compact('diases', 'symtomps'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'description' => 'required|string',
            'treatment' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        $diases = Diases::find($id);
        $diases->nama = $request->input('nama');
        $diases->description = $request->input('description');
        $diases->treatment = $request->input('treatment');
        $diases->symtomp_id = $request->input('symtomp_id'); 
        $diases->save();
        return redirect()->route('backend.diases.index');
    }

    public function destroy($id)
    {
        Diases::destroy($id);
        return redirect()->route('backend.diases.index');
    }
}