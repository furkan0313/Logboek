<?php

namespace App\Http\Controllers\Api;

use App\Journal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JournalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $journals = Journal::all();

        return response()->json("test".$journals);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $journal = Journal::create($request->except(['_token', '_method']));
        return response()->json($journal);
    }

    /**
     * Display the specified resource.
     *
     * @param Journal $journal
     * @return \Illuminate\Http\Response
     */
    public function show(Journal $journal, Request $request)
    {
        $journal->update($request->except(['_token', '_method']));
        return response()->json($journal);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Journal $journal
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit(Journal $journal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Journal $journal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Journal $journal)
    {
        $journal = $journal->update($request->except(['_token', '_method']));

        return response()->json($journal);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Journal $journal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Journal $journal)
    {
        return response()->json($journal->delete());
    }
}
