<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactNoteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExportContactController;
use App\Http\Controllers\ImportContactController;
use App\Http\Controllers\Settings\PasswordController;
use App\Http\Controllers\Settings\ProfileController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', WelcomeController::class)->name('welcome');

Route::middleware(['auth', 'verified'])->group(function (){
    //DASHBOARD
    Route::get('/dashboard', DashboardController::class)->name('dashboard');

    //SETTINGS (PROFILE PASSWORD)
    Route::get('/settings/profile-information', ProfileController::class)->name('user-profile-information.edit');
    Route::get('/settings/password', PasswordController::class)->name('user-password.edit');

    //DOWNLOAD SAMPLE EXAMPLE OF CONTACTS CSV
    Route::get('sample-contacts', function (){
        return response()->download(Storage::path('sample-contacts.csv'));
    })->name('sample-contacts');

    //IMPORT
    Route::get('/contacts/import', [ImportContactController::class, 'create'])->name('contacts.import.create');
    Route::post('/contacts/import', [ImportContactController::class, 'store'])->name('contacts.import.store');

    //EXPORT
    Route::get('/contacts/export', [ExportContactController::class, 'create'])->name('contacts.export.create');
    Route::post('/contacts/export', [ExportContactController::class, 'store'])->name('contacts.export.store');

    //CONTACTS CRUD
    Route::resource('/contacts', ContactController::class);
    Route::delete('/contacts/{contact}/restore', [ContactController::class, 'restore'])
        ->name('contacts.restore')
        ->withTrashed();
    Route::delete('/contacts/{contact}/force-delete', [ContactController::class, 'forceDelete'])
        ->name('contacts.force-delete')
        ->withTrashed();

    //COMPANIES CRUD
    Route::resource('/companies', CompanyController::class);
    Route::delete('/companies/{company}/restore', [CompanyController::class, 'restore'])
        ->name('companies.restore')
        ->withTrashed();
    Route::delete('/companies/{company}/force-delete', [CompanyController::class, 'forceDelete'])
        ->name('companies.force-delete')
        ->withTrashed();

    //TAGS CRUD
    Route::resources([
        '/tags' => TagController::class,
        '/tasks' => TaskController::class
    ]);


    //ACTIVITIES CRUD
    Route::resource('/activities', ActivityController::class);

    Route::resource('/contacts.notes', ContactNoteController::class)->shallow();
});
