<?php


namespace App\Http\Controllers;
use App\Models\Categories;
use App\Models\Products;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class ApiController extends Controller
{
    public function index() {
        $user =  Users::with('orders')->get();
//
//        return $user->orders()->get();
        return $user;
    }

    public function register(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'password' => 'required',
            'email' => 'required',
            'balance' => 'required'
        ]);
        if($validator->fails()) {
            return response()->json("fields: 'name', 'password', 'email', 'balance' are required!")->setStatusCode(400);
        }
        $user = Users::create($request->all());
        $accessToken = $user->createToken('authToken')->accessToken;

        return response()->json($accessToken);
    }

    public function login(Request $request) {
        $validator = Validator::make($request->all(),[
            'email' => 'email|required',
            'password'=> 'required'
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if(!auth()->attempt($credentials)){
            return response(['message' => "Invalid Credentials"]);
        }
        $accessToken = auth()->user()->createToken('authToken')->accessToken;

        return response()->json($accessToken);
        }
}
