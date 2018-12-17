<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\User;
use App\Models\Admin\UserInfo;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function __construct(User $user)
    {
       $this->user = $user;
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->user->all();
        return response([
            'status' => true,
            'users' => $users
        ], 200);
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
        $dataForm = $request->all();       
        $user = $this->user->create([
            'name' => $dataForm['name'],
            'email' => $dataForm['email'],
            'password' => Hash::make($dataForm['password']),
        ]);
        $user->token = $user->createToken($user->email)->accessToken;        
        return $user;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = $this->user->find($id);
        $user_info = $user->userInfo;
        return response([
            'status' => true,
            'user' => $user
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addUserInfo(Request $request)
    {
        $dataForm = $request->all();
        //dd($dataForm['user_id']);
        $user = $this->user->find($dataForm['user_id'])->userInfo()->create($dataForm);
        return response([
            'status' => true,
            'user' => $user
        ], 200);

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

    /**
     * Login de usuário vindo da API
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $data = $request->all();    
        if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']])){
          $user = auth()->user();
          $user->token = $user->createToken($user->email)->accessToken;
          return $user;
        }else{
          return ['status'=>false];
        }    
    }
}
