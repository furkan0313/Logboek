<?php

namespace App\Http\Controllers;

use App\Journal;
use Illuminate\Http\Request;

class TeacherController extends Controller
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
        return view('docenten/logboeken', [
            'journals' => Journal::all()
        ]);
    }

    public function showJournal(Journal $journal)
    {
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
