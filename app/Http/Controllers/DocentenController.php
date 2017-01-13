<?php

namespace App\Http\Controllers;

use App\Journal;
use Illuminate\Http\Request;

class DocentenController extends Controller
{
    public function index()
    {
        $journals = Journal::with('course')->get();

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
        $journals = Journal::with('course')->get();

        return view('docenten/logboeken', [
            'journals' => $journals
        ]);
    }

    public function showJournal($id)
    {
        $journal = Journal::with('course')->whereId($id)->get();

        return view('docenten/logboeken/view', [
            'journal' => $journal
        ]);
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
