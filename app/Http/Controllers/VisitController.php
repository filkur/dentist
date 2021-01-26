<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\DocBlock\Tags\Version;

class VisitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.visitform');
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
        //walidacja danych
        $request->validate([
            'specialist' => 'required',
            'type' => 'required',
            'visitDate' => 'required',
            'visitHour' => 'required',

        ]);

        $specialist = $request['specialist'];
        $type = $request['type'];
        $visitDate =  $request['visitDate'];
        $visitHour = $request['visitHour'];

        $visit = DB::table('visits')
            ->where('specialist', "$specialist")
            ->where('visitDate', "$visitDate")
            ->where('visitHour', "$visitHour")
            ->first();

        //sprawdzenie czy jest wizyta jest zajeta i dodanie jej do bazy danych
        if (empty($visit))
            DB::table('visits')->insert([
                'user_id' => Auth::id(),
               'specialist' => $specialist,
                'type' => $type,
                'visitDate' => $visitDate,
                'visitHour' => $visitHour
            ]);

        return view('posts.search', ["visit" => $visit]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*$visitsID = DB::table('visits')
            ->where('user_id', Auth::id())
            ->get('ticket_id');

        $arrayVisitsId = [];
        foreach ($visitsID as $visitId)
        {
            foreach ($visitId as $item => $key)
            {
                array_push($arrayVisitsId, $key);
            }
        }

        $arrayVisits = [];

        for ($i=0; $i<count($arrayVisitsId); $i++){
            $arrayVisits[$i] = DB::table('visits')
                ->where('id', $arrayVisitsId[$i])
                ->first();
        }*/

        $visits = DB::table('visits')
            ->where('user_id', $id) -> get();

        return view('history', ["visits" => $visits]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
