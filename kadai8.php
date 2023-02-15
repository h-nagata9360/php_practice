<?php
// 問３
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AAAController extends Controller
{
    // 以下を追記
    public function bbb()
    {
        return view('admin.AAA.create');
    }
}

Route::controller(AAAController::class)->group(function() {
    Route::get('XXX/AAA/create', 'bbb');
});

// 問４
use App\Http\Controllers\Admin\ProfileController;
Route::controller(ProfileController::class)->prefix('admin')->group(function() {
    Route::get('Profile/create', 'add');
    Route::get('Profile/edit', 'edit');
});