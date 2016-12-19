<?php

namespace App\Http\Controllers;

use App\Course;
use App\Group;
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

    public function store()
    {
        dd('feest');
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
