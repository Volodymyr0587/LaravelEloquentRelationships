<?php

use App\Models\Character;
use App\Models\Gift;
use App\Models\Message;
use App\Models\Stuff;
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

    // $user = User::first();
    // $character = $user->character;
    // return view('welcome', [
    //     'user' => $user,
    //     'character' => $character,
    // ]);




    /**
     *  ONE TO MANY
     */
    //* USER HAS MANY MESSAGES

    // User::create([
    //     'name' => fake()->name(),
    //     'email' => fake()->unique()->safeEmail(),
    //     'password' => Hash::make('password'),
    // ]);

    // $user = User::first();

    // $message1 = $user->messages()->create([
    //     'body' => fake()->words(4, true),
    // ]);

    // $message2 = $user->messages()->create([
    //     'body' => fake()->words(5, true),
    // ]);

    // return view('welcome', [
    //     'user' => $user,
    // ]);

    // //* MANY MESSAGES BELONG TO USER

    // $user = User::first();
    // $message = Message::query()->where('user_id', $user->id)->first();
    // return view('welcome', [
    //     'user' => $user,
    //     'message' => $message,
    // ]);


    /**
     *  BELONGS TO MANY
     */
    //* STUFF BELONGS TO MANY GIFTS

    // $stuff1 = Stuff::create([
    //     'name' => fake()->word(),
    // ]);

    // $stuff2 = Stuff::create([
    //     'name' => fake()->word(),
    // ]);

    // $stuff3 = Stuff::create([
    //     'name' => fake()->word(),
    // ]);

    // $stuff4 = Stuff::create([
    //     'name' => fake()->word(),
    // ]);

    // $gift1 = Gift::create([
    //     'type' => fake()->word(),
    // ])->stuffs()->attach([$stuff1->id, $stuff2->id, $stuff3->id, $stuff4->id]);

    // $gift2 = Gift::create([
    //     'type' => fake()->word(),
    // ])->stuffs()->attach([$stuff1->id, $stuff2->id]);

    // $gift1 = Gift::find(1);
    // $gift2 = Gift::find(2);

    // $firstGifts = $gift1->stuffs;
    // $secondGifts = $gift2->stuffs;

    // // //* GIFTS BELONG TO MANY STUFFS
    // $stuff1 = Stuff::find(1);
    // $stuff2 = Stuff::find(2);

    // $firstStuffs = $stuff1->gifts;
    // $secondStuffs = $stuff2->gifts;

    // return view('welcome', [
    //     'firstGifts' => $firstGifts,
    //     'secondGifts' => $secondGifts,
    //     'firstStuffs' => $firstStuffs,
    //     'secondStuffs' => $secondStuffs,
    // ]);






    /**
     *  HAS ONE THROUGH / HAS MANY THROUGH
     */
    //* USER HAS MANY GIFTS

    // $user = User::create([
    //     'name' => fake()->name(),
    //     'email' => fake()->unique()->safeEmail(),
    //     'password' => Hash::make('password'),
    // ]);

    // $gift1 = $user->gifts()->create([
    //     'type' => fake()->word(),
    // ]);

    // $gift2 = $user->gifts()->create([
    //     'type' => fake()->word(),
    // ]);

    // $user = User::first();

    // return view('welcome', [
    //     'gifts' => $user->gifts
    // ]);


    //* GIFTS BELONGS TO USER
    // $user = User::first();

    // $userGifts = Gift::where('user_id', $user->id)->get();

    // return view('welcome', [
    //     'gifts' => $user->gifts,
    //     'userGifts' => $userGifts,
    // ]);



    //* USER HAS MANY STUFFS THROUGH GIFTS
    $user = User::first();

    $gift1 = $user->gifts()->create([
        'type' => fake()->word(),
    ]);

    $stuff1 = $gift1->stuffs()->create([
        'name' => fake()->word(),
    ]);

    $gift2 = $user->gifts()->create([
        'type' => fake()->word(),
    ]);

    $stuff2 = $gift2->stuffs()->create([
        'name' => fake()->word(),
    ]);

    $stuffs = $user->stuffs;

    return view('welcome', [
        'stuffs' => $stuffs,
    ]);
});
