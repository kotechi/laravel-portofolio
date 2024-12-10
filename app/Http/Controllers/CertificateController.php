<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Certification;
use Illuminate\Support\Facades\Storage;

class CertificateController extends Controller
{
    // Menampilkan semua data sertifikasi
    public function index()
    {
        $certifications = Certification::all();
        return view('admin.certificate.dashboard', compact('certifications'));
    }

    // Menampilkan form untuk membuat sertifikasi baru
    public function create()
    {
        return view('admin.certificate.create');
    }

    // Menyimpan data baru
    public function store(Request $request)
    {
        // Validasi input
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'issued_by' => 'required|string|max:255',
            'issued_at' => 'required|date',
            'description' => 'required|string|max:1000',
            'date' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $originalImageName = $request->file('image')->getClientOriginalName(); // Nama asli image
            // Bersihkan nama image agar tidak ada karakter aneh atau spasi
            $cleanImageName = Str::slug(pathinfo($originalImageName, PATHINFO_FILENAME)); // Menggunakan slug untuk membersihkan nama
            $imageExtension = $request->file('image')->getClientOriginalExtension(); // Ambil ekstensi image
            $imageFilename = time() . '_' . $cleanImageName . '.' . $imageExtension; // Gabungkan timestamp dengan nama image yang bersih

            // Simpan image
            $imageFilePath = $request->file('image')->storeAs('certifications', $imageFilename, 'public');
            $data['image'] = $imageFilePath; // Simpan path ke database
            $data['original_image_name'] = $originalImageName; // Simpan nama asli di database
        }

        // Simpan file ke public storage
        if ($request->hasFile('file')) {
            $originalName = $request->file('file')->getClientOriginalName(); // Nama asli file
            // Bersihkan nama file agar tidak ada karakter aneh atau spasi
            $cleanName = Str::slug(pathinfo($originalName, PATHINFO_FILENAME)); // Menggunakan slug untuk membersihkan nama
            $extension = $request->file('file')->getClientOriginalExtension(); // Ambil ekstensi file
            $filename = time() . '_' . $cleanName . '.' . $extension; // Gabungkan timestamp dengan nama file yang bersih

            // Simpan file
            $filePath = $request->file('file')->storeAs('certifications', $filename, 'public');
            $data['file'] = $filePath; // Simpan path ke database
            $data['original_name'] = $originalName; // Simpan nama asli di database
        }

        // Simpan data ke database
        Certification::create($data);

        return redirect()->route('admin.certificate.index')->with('success', 'Certification created successfully.');
    }

    // Menampilkan data berdasarkan ID
    public function show($id)
    {
        $certification = Certification::findOrFail($id);
        return view('certificate.show', compact('certification'));
    }

    // Menampilkan form untuk mengedit sertifikasi
    public function edit($id)
    {
        $certification = Certification::findOrFail($id);
        return view('admin.certificate.edit', compact('certification'));
    }

    public function showdtl($id)
    {
        $certification = Certification::findOrFail($id);
        return view('admin.certificate.showdtl', compact('certification'));
    }

    // Memperbarui data
    public function update(Request $request, Certification $certification)
    {
        // Validasi input
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'issued_by' => 'required|string|max:255',
            'issued_at' => 'required|date',
            'description' => 'required|string|max:1000',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Tambahkan validasi untuk image
            'file' => 'nullable|file|mimes:pdf,doc,docx|max:2048' // Tambahkan validasi untuk file
        ]);

        // Periksa dan hapus image lama jika ada
        if ($request->hasFile('image')) {
            if ($certification->image && Storage::disk('public')->exists($certification->image)) {
                Storage::disk('public')->delete($certification->image);
            }

            $originalImageName = $request->file('image')->getClientOriginalName(); // Nama asli image
            $imageFilename = time() . '_' . $originalImageName; // Tambahkan timestamp agar unik
            $imageFilePath = $request->file('image')->storeAs('certifications', $imageFilename, 'public'); // Simpan image baru
            $data['image'] = $imageFilePath; // Simpan path ke database
            $data['original_image_name'] = $originalImageName; // Simpan nama asli di database
        }

        // Periksa dan hapus file lama jika ada
        if ($request->hasFile('file')) {
            if ($certification->file && Storage::disk('public')->exists($certification->file)) {
                Storage::disk('public')->delete($certification->file);
            }

            $originalName = $request->file('file')->getClientOriginalName(); // Nama asli file
            $filename = time() . '_' . $originalName; // Tambahkan timestamp agar unik
            $filePath = $request->file('file')->storeAs('certifications', $filename, 'public'); // Simpan file baru
            $data['file'] = $filePath; // Simpan path ke database
            $data['original_name'] = $originalName; // Simpan nama asli di database
        }

        // Update data sertifikasi
        $certification->update($data);

        return redirect()->route('admin.certificate.index')->with('success', 'Certification updated successfully.');
    }

    // Menghapus data
    public function destroy($id)
    {
        $certification = Certification::findOrFail($id);

        // Hapus image dari storage
        if ($certification->image && Storage::disk('public')->exists($certification->image)) {
            Storage::disk('public')->delete($certification->image);
        }

        // Hapus file dari storage
        if ($certification->file && Storage::disk('public')->exists($certification->file)) {
            Storage::disk('public')->delete($certification->file);
        }

        // Hapus data dari database
        $certification->delete();

        return redirect()->route('admin.certificate.index')->with('success', 'Certification deleted successfully.');
    }
}