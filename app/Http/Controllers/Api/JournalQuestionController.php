<?php

namespace App\Http\Controllers\Api;

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
    public function store(Request $request)
    {
        //
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
    public function update(Request $request, JournalQuestion $journalQuestion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  JournalQuestion $journalQuestion
     * @return \Illuminate\Http\Response
     */
    public function destroy(JournalQuestion $journalQuestion)
    {
        //
    }
}
