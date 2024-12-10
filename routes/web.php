<?php

use App\Http\Controllers\tbl_portoController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ContactsController;

use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);


Route::get('home', [HomeController::class, 'index']);

Route::post('/send-email', [ContactsController::class, 'sendEmail'])->name('send.email');

Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/admin/chart', [KeuanganController::class, 'index']);
    // Routes Job Management untuk Admin
    Route::prefix('admin/jobs')->name('jobs.')->group(function () {
        Route::get('/', [JobController::class, 'index'])->name('index');
        Route::get('/create', [JobController::class, 'create'])->name('create');
        Route::delete('/{job}', [JobController::class, 'destroy'])->name('destroy');
    });

    // Routes Dashboard untuk Admin
    Route::get('/admin/dashboard', [AdminController::class, 'index']);

    Route::resource('/admin/dashboard', tbl_portoController::class)->names([
        'create' => 'admin.dashboard.create',
        'store' => 'admin.about.store',
        'index' => 'admin.dashboard',
    ]);

    // Routes About Management untuk Admin
    Route::prefix('admin/about')->name('about.')->group(function () {
        Route::put('/show/{about}', [tbl_portoController::class, 'update'])->name('update');
        Route::get('/edit/{about}', [tbl_portoController::class, 'edit'])->name('edit');
        Route::delete('/show/{about}', [tbl_portoController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('admin/certificate')->name('admin.certificate.')->group(function () {
        Route::get('/{id}/view', [CertificateController::class, 'viewPdf'])->name('view');
        Route::put('/update/{certification}', [CertificateController::class, 'update'])->name('update');
        Route::get('/edit/{certification}', [CertificateController::class, 'edit'])->name('edit');
        Route::get('/showdtl/{certification}', [CertificateController::class, 'showdtl'])->name('showdtl');
    });

    Route::resource('admin/certificate', CertificateController::class)->names([
        'index' => 'admin.certificate.index',
        'create' => 'admin.certificate.create',
        'store' => 'admin.certificate.store',
        'show' => 'admin.certificate.show',
        'destroy' => 'admin.certificate.destroy',
    ]);

    Route::prefix('admin/projects')->name('admin.projects.')->group(function () {
        Route::put('/update/{projects}', [ProjectsController::class, 'update'])->name('update');
        Route::get('/edit/{projects}', [ProjectsController::class, 'edit'])->name('edit');
    });

    Route::resource('admin/projects', ProjectsController::class)->names([
        'index' => 'admin.projects.index',
        'store' => 'admin.projects.store',
        'create' => 'admin.projects.create',
        'destroy' => 'admin.projects.destroy',
    ]);


    Route::prefix('admin/contacts')->name('admin.contacts.')->group(function () {
        Route::put('/update/{contacts}', [ContactsController::class, 'update'])->name('update');
        Route::get('/edit/{contacts}', [ContactsController::class, 'edit'])->name('edit');
    });

    Route::resource('admin/contacts', ContactsController::class)->names([
        'index' => 'admin.contacts.index',
        'store' => 'admin.contacts.store',
        'create' => 'admin.contacts.create',
        'destroy' => 'admin.contacts.destroy',
    ]);
});

// Route Dashboard
Route::get('/dashboard', [HomeController::class, 'index']
)->middleware(['auth', 'verified'])->name('dashboard');

// Routes Profil dengan middleware auth
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Auth routes
require __DIR__ . '/auth.php';
