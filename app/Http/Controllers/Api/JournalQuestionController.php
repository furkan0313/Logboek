<?php

namespace App\Http\Controllers\Api;

use App\Journal;
use App\JournalQuestion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JournalQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $journalQuestions = JournalQuestion::all();
        return response()->json($journalQuestions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Journal $journal)
    {
        $journalQuestions = $journal->questions()->create($request->except(['_token', '_method']));
        return response()->json($journalQuestions);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  JournalQuestion $journalQuestion
     * @return \Illuminate\Http\Response
     */
    public function show(JournalQuestion $journalQuestion)
    {
        return response()->json($journalQuestion);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  JournalQuestion $journalQuestion
     * @return \Illuminate\Http\Response
     */
    public function edit(JournalQuestion $journalQuestion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  JournalQuestion $journalQuestion
     * @return \Illuminate\Http\Response
     */
    public function update(Journal $journal, $question)
    {
        $journal->questions()->attach($question);
        return response()->json($journal);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Journal $journal, $question)
    {
        $journal->questions()->detach($question);
        return response()->json($journal);
    }
}
