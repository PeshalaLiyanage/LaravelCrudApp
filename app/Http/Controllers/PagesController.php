<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Welcome to My Page';
        return view('pages.index')->with('title', $title);
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {

        $data = array('title' => 'Services',
            'services' => ['Web', 'Mobile', 'React']
        );
        return view('pages.services')->with($data);
    }
}
