<?php

use App\personTable;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $user = personTable::all();
    return view('welcome', ['user' => $user]);
});
Route::get('/edit/users/{id}', function ($id) {
    $user = personTable::find($id);
    return view('editusers', ['user' => $user]);
});
// Name of the person, address, phone number, email, gender,
// checkbox
