<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Welcome to Laravel!';
        return view('pages.index')->with('title', $title);
    }
    public function about()
    {
        $title = 'The About Page';
        return view('pages.about')->with('title', $title);
    }
    public function services()
    {
        $data = array(
            'title' => 'Services Page',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
