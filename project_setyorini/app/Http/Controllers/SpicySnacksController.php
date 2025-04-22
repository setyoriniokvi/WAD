<?php

namespace App\Http\Controllers;

use App\Models\SpicySnacks;

class SpicySnacksController extends Controller
{
    public function index()
    {
        $snacks = SpicySnacks::all();
        return view('snacks', compact('snacks'));
    }
}
