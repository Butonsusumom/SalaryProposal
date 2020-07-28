<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use phpDocumentor\Reflection\Types\Integer;
use ReflectionClass;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index() {
        Log::info('Show all users');
        $user = User::all();
        return response()->json($user,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function create(Request $request) {
       //  User::create($request->all);
        //return response()->json();
        Log::info('Create user');
        $user = new User();

        $user->lastName = $request->lastName;
        $user->firstName= $request->firstName;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = $request->password;
        $user->api_token= $user->generateToken();

        $user->save();
        return response()->json($user,201);
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
     * @param $id
     * @return JsonResponse
     */
    public function show($id){
        if (!(User::find($id)))return response()->json(array('message'=>'Not Found','code'=>404),404);
        else {
            Log::info('Find user by id ' . $id);
            $user = User::find($id);
            return response()->json($user,200);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     * @param $id
     * @return JsonResponse
     */
    public function edit(Request $request, $id) {
        if (!(User::find($id)))return response()->json(array('message'=>'Not Found','code'=>404),404);
        else {
            Log::info('Update user' . $id);
            $user = User::findOrFail($id);
            $user->update($request->all());
            return response()
                // ->setStatusCode(201, 'The resource is created successfully!')
                //->header('Content-Type','application/json')
                ->json($user,201);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user){
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return JsonResponse
     */
    public function destroy($id){
        if (!(User::find($id)))return response()->json(array('message'=>'Not Found','code'=>404),404);//return response()->json(array(Res::HTTP_NOT_FOUND,Res::$statusTextsEn[404]));
        else {
            Log::info('Delete user'.$id);
            $user = User::find($id)->delete();
            return response()->json(array('message'=>'No Content','code'=>204),204);
        }
    }
}
