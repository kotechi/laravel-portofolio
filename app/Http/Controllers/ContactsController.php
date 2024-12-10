<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Auth;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contacts::all();
        return view('admin.contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name',
            'address',
            'gmail',
            'whatsapp',
        ]);
        Contacts::create($request->all());
        return redirect()->route('admin.contacts.index');
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
    public function edit(Contacts $contacts)
    {
        return view('admin.contacts.edit', compact('contacts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contacts $contacts)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'gmail' => 'required',
            'whatsapp' => 'required',
        ]);

        $contacts->update($request->all());

        return redirect()->route('admin.contacts.index')->with('success', 'Contacts updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $contacts = Contacts::findOrFail($id);
        $contacts->delete();
        return redirect()->route('admin.contacts.index')->with('success', 'Contacts deleted successfully.');
    }

    public function sendEmail(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'email' => 'required|email',
            'message' => 'required|min:10'
        ]);

        // Kirim email
        try {
            Mail::raw($request->message, function($message) use ($request) {
                $message->to('your_email@example.com') // Ganti dengan email Anda
                        ->from($request->email)
                        ->subject('Pesan Baru dari Formulir Kontak');
            });

            return back()->with('success', 'Email berhasil dikirim!');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal mengirim email. Silakan coba lagi.');
        }
    }
}
