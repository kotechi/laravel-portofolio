<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::all();
        return view('admin.jobs.index', compact('jobs'));
    }
    public function create()
    {
        return view('admin.jobs.createjob'); // Menampilkan formulir pembuatan job
    }

    public function destroy(Job $job)
    {
        $job->delete();
        return redirect()->route('admin.jobs.index')->with('success', 'Job deleted successfully.');
    }

    public function store(Request $request)
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

        return redirect()->route('admin.dashboard')->with('success', 'Job created successfully.');
    }
}
