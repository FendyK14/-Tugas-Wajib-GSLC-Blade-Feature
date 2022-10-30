<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    public function index()
    {
        $post_region = Region::all();
        return view('region', compact('post_region'));
    }
}
