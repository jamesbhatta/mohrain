<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage()
    {
        return view('pages.homepage',[
            'services' => \App\Models\Service::get()
        ]);
    }

    public function contactUs()
    {
        return view('pages.contact-us');
    }

    public function aboutUs()
    {
        return view('pages.about-us');
    }

    public function ourTeam()
    {
        $teams = \App\Models\Team::positioned()->get();
        return view('pages.our-team', compact('teams'));
    }
}
