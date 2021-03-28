<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class WelcomeController extends Controller
{
    function index() {
        return view('welcome.index');
    }
    function contact() {
        return view('contact');
    }
    function apropos() {
        return view('apropos');
    }
}
