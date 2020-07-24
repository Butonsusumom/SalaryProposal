<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use phpDocumentor\Reflection\Types\Integer;
use function MongoDB\BSON\toJSON;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index() {
        Log::info('Show all users');
        $user = User::all();
        return response()->json($user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
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
        return response()->json($user);
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
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id){
        Log::info('Find user by id '.$id);
        $user = User::find($id);
        return response()->json($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit(Request $request, $id) {
        Log::info('Update user'.$id);
        $user = User::findOrFail($id);
        $user->update($request->all());
        return response()
          // ->setStatusCode(201, 'The resource is created successfully!')
           //->header('Content-Type','application/json')
          ->json($user);
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
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id){
        Log::info('Delete user'.$id);
        $user= User::find($id)->delete();
        return response()->json($user);
    }
}
