<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SchoolsController extends Controller
{
    public function index()
    {
        $schools = \App\School::orderBy('NatEmis', 'desc')->paginate(24);

        return view('schools.index')->with('schools', $schools);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('schools.create');
    }

    /**
     * Store a newly created resource in storage.h a school
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($NatEmis)
    {
        $school = \App\School::find($NatEmis);
        return view('schools.show')->with('school', $school);
    }

    public function search()
    {
        // $schools = \App\School::paginate(25);
        // return view('schools.search')->with('schools', $schools);
        return view('schools.search');
    }

    public function handle()
    {
        $q = Input::get('q');
        if ($q != "") {
            $schools = \App\School::where('Institution_Name', 'LIKE', '%' . $q . '%')->get();

            // dd($schools);

            if (count($schools) > 0) {
                return view('schools.search')->with('schools', $schools);
            } else {
                return view('schools.search')->with('error', 'Huh?');
            }

        }
        return view('schools.search');
    }
}
