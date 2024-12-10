<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class AdminController extends Controller
{
    public function index() 
    {
        $jobs = Job::all(); 
        return view('admin.dashboard', compact('jobs'));
    }
    public function createjob()
    {
        return view('admin.dashboard.create'); // Menampilkan formulir pembuatan job
    }
    public function destroyjob(Job $job) 
    {
        $job->delete();
        return redirect()->route('jobs.index')->with('success', 'Job deleted successfully.');
    }

    public function storejob(Request $request)
    {
        // Validasi input
        $request->validate([
            'queue' => 'required|string|max:255',
            'payload' => 'required|string',
            'attempts' => 'required|integer',
            'reserved_at' => 'nullable|integer',
            'available_at' => 'required|integer',
            'created_at' => 'required|integer',
        ]);

        // Menyimpan job baru ke dalam database
        Job::create($request->all());

        return redirect()->route('jobs.index')->with('success', 'Job created successfully.');
    }
}
