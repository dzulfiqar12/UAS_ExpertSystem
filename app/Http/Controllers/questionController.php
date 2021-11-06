<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\question;

class questionController extends Controller
{
    public function index()
    {
        $question = question::inRandomOrder()->get();

        return view('question', compact('question'))->with('i', (request()->input('page', 1) - 1));
    }
}
