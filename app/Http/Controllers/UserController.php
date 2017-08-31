<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\User as User;

class UserController extends Controller
{
    


    public function login(){
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
        $user = Auth::user();
        $this->content['token'] =  $user->createToken('Pizza App')->accessToken;
        $status = 200;
    }
    else{
        $this->content['error'] = "Unauthorised";
         $status = 401;
    }
     return response()->json($this->content, $status);    
    }

    

    



    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = User::all();
        return array("users"=> $users);
    }
  
      /**
       * Show the form for creating a new resource.
       *
       * @return Response
       */
    public function create()
    {
        //
    }
  
      /**
       * Store a newly created resource in storage.
       *
       * @param  Request  $request
       * @return Response
       */
     
    public function store(Request   $request)
    {
        $validator  =   Validator::make($request->all(), [
           'name'  =>  'required|max:10',
           ]);
 
        if ($validator->fails()) {
                      return    array("error"=>"Fields	Required",  "fields"    =>  $validator->errors()->all());
        } else {
            return "ok";
        }
    }
  
      /**
       * Display the specified resource.
       *
       * @param  int  $id
       * @return Response
       */
    public function show($id)
    {
        //
    }
  
      /**
       * Show the form for editing the specified resource.
       *
       * @param  int  $id
       * @return Response
       */
    public function edit($id)
    {
        //
    }
  
      /**
       * Update the specified resource in storage.
       *
       * @param  Request  $request
       * @param  int  $id
       * @return Response
       */
    public function update(Request $request, $id)
    {
        //
    }
  
      /**
       * Remove the specified resource from storage.
       *
       * @param  int  $id
       * @return Response
       */
    public function destroy($id)
    {
        //
    }
}
