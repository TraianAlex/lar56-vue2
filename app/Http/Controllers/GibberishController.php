<?php

namespace App\Http\Controllers;

use App\Gibberish;
use App\Http\Requests\GibberishRequest;
use Illuminate\Http\Request;

class GibberishController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function playground()
    {
        return view('gibberish.playground');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function index()
    {
        return Gibberish::all();
    }


    /**
     * @param GibberishRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(GibberishRequest $request)
    {
        $gibberish = Gibberish::create($request->all());

        return response()->json([
            'object' => $gibberish,
            'message' => 'Giberrish created!'
        ], 201); // 201 - object created
    }

    /**
     * @param Gibberish $gibberish
     * @return Gibberish
     */
    public function show(Gibberish $gibberish)
    {
        return $gibberish;
    }


    /**
     * @param GibberishRequest $request
     * @param Gibberish $gibberish
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(GibberishRequest $request, Gibberish $gibberish)
    {
        $gibberish->udpate($request->all());

        return response()->json($gibberish, 200); // 200 -standard success
    }


    /**
     * @param Gibberish $gibberish
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function destroy(Gibberish $gibberish)
    {
        $gibberish->delete();

        return response()->json(null, 204);
    }
}
