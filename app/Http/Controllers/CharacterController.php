<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function index()
    {
        $post_character = Character::all();
        return view('home', compact('post_character'));
    }
}
