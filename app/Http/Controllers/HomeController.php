<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contacts;
use App\Models\Projects;
use App\Models\Certification;
use App\Models\tbl_portoModel;

class HomeController extends Controller
{
    public function index()
    {
        $contacts = Contacts::first(); // Use first() instead of all() if you want a single contact
        $projects = Projects::all();
        $certificates = Certification::all();
        $about = tbl_portoModel::first(); // Use first() instead of all() if you want a single about entry

        return view('home', [
            'contacts' => $contacts,
            'projects' => $projects,
            'certificates' => $certificates,
            'about' => $about
        ]);
    }
}
