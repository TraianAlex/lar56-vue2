<?php

namespace App\Http\Controllers;

use App\Gibberish;
use Illuminate\Http\Request;

class GibberishController extends Controller
{
    public function playground()
    {
        return view('gibberish.playground');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Gibberish::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gibberish =  Gibberish::create($request->all());

        return response()->json($gibberish, 201); // 201 - object created
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gibberish  $gibberish
     * @return \Illuminate\Http\Response
     */
    public function show(Gibberish $gibberish)
    {
        return $gibberish;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gibberish  $gibberish
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gibberish $gibberish)
    {
        $gibberish->udpate($request->all());

        return response()->json($gibberish, 200); // 200 -standard success
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gibberish  $gibberish
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gibberish $gibberish)
    {
        $gibberish->delete();

        return response()->json(null, 204);
    }
}
