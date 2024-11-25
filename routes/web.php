<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\ViewProfile;
use App\Models\Member;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


// Route::get('edit-profile/{member_id}', function ($member_id) {
//     return view('edit-profile', compact('member_id'));
// })->name('edit-profile');

Route::get('edit-profile/{member_id}', function ($member_id) {
    $member = Member::where('member_id', $member_id)->firstOrFail();
    return view('edit-profile', compact('member'));
})->name('edit-profile');


// Route::get('edit-profile/{member_id}', function ($member_id) {
//     dd($member_id, Member::find($member_id));  // This will output the member_id and the result of Member::find
//     $member = Member::findOrFail($member_id);
//     return view('edit-profile', compact('member'));
// })->name('edit-profile');

Route::middleware(['auth:sanctum', 'verified'])->get('/profile-complete', function () {
    return view('profile-complete');
})->name('profile-complete');


// Route::get('/profile-complete', function () {
//     return view('profile-complete');
// })->name('profile-complete');


Route::get('/member-view/{id}', function ($id) {
    return view('member-view', compact('id'));
})->name('member-view');

Route::get('/member', function () {
    return view('member');
})->name('member');

Route::get('/by-laws', function () {
    return view('by-laws');
})->name('by-laws');

Route::get('/constitutions', function () {
    return view('constitutions');
})->name('constitutions');