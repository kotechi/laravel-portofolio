<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Projects;
use Illuminate\Support\Facades\Storage;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Projects::all();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'link' => 'nullable|url',
            'date' => 'nullable|date',
        ]);

        // Proses gambar jika ada
        if ($request->hasFile('image')) {
            $originalImageName = $request->file('image')->getClientOriginalName();
            $cleanImageName = Str::slug(pathinfo($originalImageName, PATHINFO_FILENAME));
            $imageExtension = $request->file('image')->getClientOriginalExtension();
            $imageFilename = time() . '_' . $cleanImageName . '.' . $imageExtension;

            // Simpan di direktori 'projects'
            $imageFilePath = $request->file('image')->storeAs('projects', $imageFilename, 'public');
            $data['image'] = 'projects/' . $imageFilename; // Path gambar
            $data['original_image_name'] = $originalImageName; // Nama asli gambar
        }

        // Simpan data ke database
        Projects::create($data);
        return redirect()->route('admin.projects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Projects $projects)
    {
        return view('admin.projects.edit', compact('projects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Projects $projects)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'link' => 'nullable|url',
            'date' => 'nullable|date',
        ]);

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($projects->image) {
                Storage::disk('public')->delete($projects->image);
            }
        
            $originalImageName = $request->file('image')->getClientOriginalName();
            $cleanImageName = Str::slug(pathinfo($originalImageName, PATHINFO_FILENAME));
            $imageExtension = $request->file('image')->getClientOriginalExtension();
            $imageFilename = time() . '_' . $cleanImageName . '.' . $imageExtension;
        
            // Simpan dengan folder 'projects'
            $imageFilePath = $request->file('image')->storeAs('projects', $imageFilename, 'public');
            $data['image'] = 'projects/' . $imageFilename;
        }
        
        
        $projects->update($data);

        return redirect()->route('admin.projects.index')->with('success', 'Projects updated successfully.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $projects = Projects::findOrFail($id);

        // Hapus image dari storage
        if ($projects->image && Storage::disk('public')->exists($projects->image)) {
            Storage::disk('public')->delete($projects->image);
        }

        // Hapus file dari storage
        if ($projects->file && Storage::disk('public')->exists($projects->file)) {
            Storage::disk('public')->delete($projects->file);
        }

        // Hapus data dari database
        $projects->delete();

        return redirect()->route('admin.certificate.index')->with('success', 'Projects deleted successfully.');
    }
}
