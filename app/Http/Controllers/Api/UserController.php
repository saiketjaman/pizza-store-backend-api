<?php
namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Requests\UserRegisterRequest;
use App\Http\Requests\UserLoginRequest;
use App\Http\Resources\User as UserResource;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public $successStatus = 200;

     /**
     * login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(UserLoginRequest $request){
        if($token = auth()->attempt($request->only(['email','password']))) {
            $user = Auth::user();
            $showToken['token'] =  $user->createToken('MyApp')-> accessToken;
            return (new UserResource($request->user()))->additional([
                'meta' => $showToken
            ]);
        }else {
            return response()->json(
                ['error'=> [
                'message' => 'Sorry, we cant find your details'
                ]
            ], 401);
        }
    }
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(UserRegisterRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        $showToken['token'] =  $user->createToken('TLMS')-> accessToken;
        if(!$token = auth()->attempt($request->only(['email','password']))) {
            return response()->json(
                ['error'=> [
                'message' => 'Sorry, Cant Register'
                ]
            ], 401);
        }
        return (new UserResource($request->user()))->additional([
            'meta' => $showToken
        ]);
    }

    /**
     * details api
     *
     * @return \Illuminate\Http\Response
     */
    public function userDetails(Request $request)
    {
        $user = Auth::user();
        return new UserResource($request->user());
    }

    /**
     * Logout user (Revoke the token)
     *
     * @return [string] message
     */
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out',
        ]);
    }
}
