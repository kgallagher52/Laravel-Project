<?php

namespace App\Http\Controllers;
use App\Card;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CardsController extends Controller
{

    public function index()
    {
        // Before Making model code
        // $cards = DB::table('cards')->get();
        // After making card model code
        $cards = Card::all();
        return view('cards.index', compact('cards'));
    }
    public function show($id)
    {
        $card = Card::find($id);
        return view('cards.show', compact('card'));
    
    }
}
