<?php

namespace App\Http\Controllers;

use App\defsal;
use App\Salary;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class DefsalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index() {
        $sal = DefSal::all();
        return response()->json($sal);
    }

    /**
     * Display a listing of the resource.c
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function calculate($city, $position, $experience, Request $request) {
        $lang=$request->headers->get('Accept-Language');
        if ($lang=='de') $mess=Response::$statusTextsDe;
        else $mess=Response::$statusTexts;

        $sal = DefSal::where('position', $position)->where('region', $city)->first();
        if ($sal->exists()) {

        Log::info('Calculate the salary for '.$position.' in '.$city.', who has experience '.$experience.' years');
        $user = DefSal::where('position', $position)->where('region', $city)->first();
        //return response()->json($user);
        //$user= DefSal::find($id);
        //$user->position = $sal->position;
        //$user->region= $sal->region;
        //$user->min = $sal->min;
        //$user->max = $sal->max;
        //$user->isLead = $sal->isLead;

        $mindef = $user->min;
        $maxdef = $user->max;
        $isLead = $user->isLead;
        $x = $maxdef *$isLead / 10;
        $y = ($maxdef - $mindef - $x) / 20;
        $min=$mindef + round( $experience/5) * $y;
        $max=$y* $experience + $mindef + $x;


        return response()->json(array('minsal'=>$min,'maxsal'=>$max),Response::HTTP_OK);
        }
        else{
            return response()->json(array('message'=>$mess[Response::HTTP_CONFLICT],'code'=>Response::HTTP_CONFLICT),Response::HTTP_CONFLICT);
        }
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
     * @param  \App\defsal  $defsal
     * @return \Illuminate\Http\Response
     */
    public function show(defsal $defsal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\defsal  $defsal
     * @return \Illuminate\Http\Response
     */
    public function edit(defsal $defsal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\defsal  $defsal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, defsal $defsal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\defsal  $defsal
     * @return \Illuminate\Http\Response
     */
    public function destroy(defsal $defsal)
    {
        //
    }
}
