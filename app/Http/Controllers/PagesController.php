<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'A Work in Progress!';
        return view('pages.index')->with('title', $title);
    }

    public function schools()
    {
        return view('pages.schools');
    }
}
