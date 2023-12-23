<?php

use App\Models\Character;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    /**
     *  ONE TO ONE
     */
    //* USER HAS ONE CHARACTER

    // $user = User::create([
    //     'name' => fake()->name(),
    //     'email' => fake()->unique()->safeEmail(),
    //     'password' => Hash::make('password'),
    // ]);

    // $user->character()->create([
    //     'username' => fake()->userName(),
    // ]);

    // return view('welcome', [
    //     'user' => $user,
    // ]);

    //* CHARaCTER BELONGS TO USER

    $user = User::first();
    $character = $user->character;
    return view('welcome', [
        'user' => $user,
        'character' => $character,
    ]);
});
