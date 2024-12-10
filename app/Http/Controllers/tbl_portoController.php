<?php

namespace App\Http\Controllers;

use App\Models\tbl_portoModel;
use Illuminate\Http\Request;

class tbl_portoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = tbl_portoModel::all();
        return view('admin.dashboard', compact('about'));
    }

    public function home()
    {
        $about = tbl_portoModel::all();
        return view( 'home', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required',
            'judul' => 'required',
            'umur' => 'required',
            'tanggal_lahir' => 'required',
            'city' => 'required',
            'freelance' => 'required',
            'deskripsi2' => 'required',
            'language' => 'required',
            'educational_background' => 'required'
        ]);
        session()->flash('success', 'Data berhasil ditambahkan!');
        tbl_portoModel::create($request->all());
        return redirect()->route('admin.dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(tbl_portoModel $about)
    {
        return view('admin.about.show', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tbl_portoModel $about)
    {
        return view('admin.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tbl_portoModel $about)
    {
        $request->validate([
            'deskripsi' => 'required',
            'judul' => 'required',
            'umur' => 'required',
            'tanggal_lahir' => 'required',
            'city' => 'required',
            'freelance' => 'required',
            'deskripsi2' => 'required',
            'language' => 'required',
            'educational_background' => 'required'
        ]);

        $about->update($request->all());
        session()->flash('success', 'Data berhasil diupdate!');
        return redirect()->route('admin.dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $about = tbl_portoModel::findOrFail($id); // Temukan model berdasarkan ID
        $about->delete(); // Hapus model
        session()->flash('success', 'Data berhasil dihapus!');
        return redirect()->route('admin.dashboard')->with('success', 'Data deleted successfully');
    }
}
