<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocentenController extends Controller
{
    public function index()
    {
        return view('docenten/index');
    }
    public function courses()
    {
        return view('docenten/vakken');
    }

    public function graphs()
    {
        return view('docenten/grafieken');
    }

    public function reports()
    {
        return view('docenten/meldingen');
    }

    public function journals()
    {
        return view('docenten/logboeken');
    }

    public function trails()
    {
        return view('docenten/trajecten');
    }

    public function show_student()
    {
        return view('docenten/leerling');
    }
}
