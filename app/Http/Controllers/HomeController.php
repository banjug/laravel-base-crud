<?php

namespace App\Http\Controllers;

use App\Comics;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        $comics = Comics::all();
        return view('pages.home', compact('comics'));
    }
    public function show($id) {
        $comic = Comics::findOrFail($id);
        return view('pages.show', compact('comic'));
    }

}
