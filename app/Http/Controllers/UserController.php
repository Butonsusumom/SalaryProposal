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
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request) {
        $lang=$request->headers->get('Accept-Language');
        $mess=Response::$statusTexts;

        Log::info('Show all users');
        $user = User::all();
        return response()->json($user,Response::HTTP_OK);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function create(Request $request) {
        $lang = $request->headers->get('Accept-Language');
        if ($lang=='de') $mess=Response::$statusTextsDe;
        else $mess=Response::$statusTexts;

        if (User::where('email', '=', $request->email)->exists()) {
            return response()->json(array('message'=>$mess[Response::HTTP_CONFLICT],'code'=>Response::HTTP_CONFLICT),Response::HTTP_CONFLICT);
        }
        else {
            Log::info('Create user');
            $user = new User();

            $user->lastName = $request->lastName;
            $user->firstName = $request->firstName;
            $user->email = $request->email;
            $user->role = $request->role;
            $user->password = $request->password;
            $user->api_token = $user->generateToken();

            $user->save();
            return response()->json($user, Response::HTTP_CREATED);
        }
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
     * @param Request $request
     * @return JsonResponse
     */
    public function show($id,Request $request){
        $lang=$request->headers->get('Accept-Language');
        if ($lang=='de') $mess=Response::$statusTextsDe;
        else $mess=Response::$statusTexts;

        if (!(User::find($id)))return response()->json(array('message'=>$mess[Response::HTTP_NOT_FOUND],'code'=>Response::HTTP_NOT_FOUND),Response::HTTP_NOT_FOUND);
        else {
            Log::info('Find user by id ' . $id);
            $user = User::find($id);
            return response()->json($user,Response::HTTP_OK);
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
        $lang=$request->headers->get('Accept-Language');
        if ($lang=='de') $mess=Response::$statusTextsDe;
        else $mess=Response::$statusTexts;

        if (User::where('email', '=', $request->email)->exists()) {
            return response()->json(array('message'=>$mess[Response::HTTP_CONFLICT],'code'=>Response::HTTP_CONFLICT),Response::HTTP_CONFLICT);
        }
        else {
            if (!(User::find($id))) return response()->json(array('message' => $mess[Response::HTTP_NOT_FOUND], 'code' => Response::HTTP_NOT_FOUND), Response::HTTP_NOT_FOUND);
                 else {
                      Log::info('Update user' . $id);
                      $user = User::findOrFail($id);
                      $user->update($request->all());
                      return response()->json($user, Response::HTTP_OK);
                 }
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
     * @param Request $request
     * @return JsonResponse
     */
    public function destroy($id,Request $request){
        $lang=$request->headers->get('Accept-Language');
        if ($lang=='de') $mess=Response::$statusTextsDe;
        else $mess=Response::$statusTexts;

        if (!(User::find($id)))return response()->json(array('message'=>$mess[Response::HTTP_NOT_FOUND],'code'=>Response::HTTP_NOT_FOUND),Response::HTTP_NOT_FOUND);//return response()->json(array(Res::HTTP_NOT_FOUND,Res::$statusTextsEn[404]));
        else {
            Log::info('Delete user'.$id);
            $user = User::find($id)->delete();
            return response()->json(array('message'=>$mess[Response::HTTP_NO_CONTENT],'code'=>Response::HTTP_NO_CONTENT),Response::HTTP_NO_CONTENT);
        }
    }
}
