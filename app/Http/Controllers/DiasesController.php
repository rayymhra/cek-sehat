<?php

namespace App\Http\Controllers;

use App\Models\Diases;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DiasesController extends Controller
{
    public function index()
    {
        $diases = Diases::all();
        return view('backend.diases.index', compact('diases'));
    }

    public function create()
    {
        return view('backend.diases.create');
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
        return view('backend.diases.edit', compact('diases'));
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
        $diases->save();
        return redirect()->route('backend.diases.index');
    }

    public function destroy($id)
    {
        Diases::destroy($id);
        return redirect()->route('backend.diases.index');
    }
}