<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});


Route::get("/secondaryPage", function () {
    // Il return sarà quello che l'utente vedrà nel suo browser
    return "<h1>Benvenuto sul mio sito!</h1>";
})->name("secondPage");



Route::get("/aboutuse", function () {
    $user = [
        'name' => 'Mario',
        'surname' => 'Rossi',
        'hobby' => ['calcio','chitarra'],
    ];

    


    return view("user",[
        "user"=> $user,
        


    ]);
})->name("user");


Route::get("/abouthobby", function () {
    $hobby = ['calcio','chitarra','pianoforte','pallavolo'];

    


    return view("hobby",[
        "hobby"=> $hobby,
        


    ]);
})->name("hobby");