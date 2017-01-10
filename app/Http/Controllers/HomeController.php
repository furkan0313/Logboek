<?php

namespace App\Http\Controllers;

use App\Course;
use App\Group;
use App\Journal;
use App\JournalQuestion;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function index(User $user){
        $courses = $user->courses;

        return view('home',compact('courses'));
    }

    public function show($id)
    {
        $questions = Journal::find($id)->with('questions')->get();

        foreach ($questions as $question){
            var_dump($question);
        }


    }
    public function store(Request $request) // What is stored here?
    {

        $course = new Course();

        $course->name = "PHP";
        $course->image = "example.jpg";

        $course->save();

        $journal = new Journal();

        $journal->name = $request->name;
        $journal->course()->associate($course);

        $journal->save();

        $journal->questions()->create([
            'description' => 'hoppa',
            'type' => 'range'
        ]);

        dd($course);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home');
    }
}
