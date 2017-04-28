<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getContact()
    {
        return view('pages.contact-us');
    }
    public function getPackages()
    {
        return view('pages.packages');
    }
    public function getBlog()
    {
        return view('pages.blog');
    }
}
