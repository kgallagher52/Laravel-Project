<?php

// Route::get('/', function () {
//     This is being moved to my pages controller {
//      $people = ['Keaton', 'Jeremy', 'Jeff', 'Fish'];
//      return view('welcome', compact('people'));
//    }
// });

// Doing the same thing as done above but using a controller

Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');
// On the database side Displaying all cards
Route::get('cards', 'CardsController@index');
Route::get('cards/{card}', 'CardsController@show'); // {card} - is regular expression just want to match
Route::post('cards/{card}/notes', 'NotesController@store');