<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function home() {
        return view('static-page.home');
    }

    public function privacy() {
        return view('static-page.privacy');
    }

    public function faq() {
        return view('static-page.faq');
    }
}
