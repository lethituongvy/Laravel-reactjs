<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Love;
use \Firebase\JWT\JWT;
use Illuminate\Support\Facades\Auth;

class LoveController extends Controller
{
    function index()
    {
        $love = DB::table('love')->get();
        return json_encode($love);
    }
    function show($id)
    {
        $loves = DB::table('love')->where("id",$id)->get();
        return json_encode($loves);
     }
    function store(Request $request)
    {
        $name = $request->input('name');
        $ages = $request->input('ages');
        $address = $request->input('address');
        $facebook = $request->input('facebook');
        $job = $request->input('job');
        $image = $request->input('image');
        $weight = $request->input('weight');
        $height = $request->input('height');
        $description = $request->input('description');
        
        DB::table("love")->insert([
            "name" => $name,
            "ages" => $ages,
            "address" => $address,
            "facebook" => $facebook,
            "job" => $job,
            "image" => $image,
            "weight" => $weight,
            "height" => $height,
            "description" => $description
        ]);

        $responseData = array("data" => null);
        return response()->json($responseData, 200);
    }
    function contact(Request $request, $id) 
    {

        $love=Love::find($id);
        $image= $love->image;
        $name = $request->input('name');
        $ages = $request->input('ages');
        
        $phone = $request->input('phone');
        $email = $request->input('email');
        $date = $request->input('date');
        $hours = $request->input('hours');

        DB::table("info")->insert([
                "name" => $name,
                "ages"=>$ages,
                "image" =>$image,
                "phone" => $phone,
                "email" => $email,
                "date" => $date,
                "hours" => $hours
        ]);
        $responseData = array("data"=>null);
        return response()->json($responseData, 200);
    }
    function register(Request $request) 
    {
        $name = $request->input('name');
        $username = $request->input('username');
        $pass = $request->input('password');
        $password = Hash::make($pass);
        $birth = $request->input('birth');
        $height = $request->input('height');
        $weight = $request->input('weight');
        $addres = $request->input('addres');
        $phone = $request->input('phone');
        $image = $request->image->store("public");
        $description = $request->input('description');
        
        DB::table("users")->insert([
            "name" => $name,
            "username" => $username,
            "password" => $password,
            "birth" => $birth,
            "height" => $height,
            "weight"=> $weight,
            "addres" => $addres,
            "phone" => $phone,
            "image" => '/storage/'.$image,
            "description" => $description
        ]);
        $responseData = array("data"=>null);
        return response()->json($responseData, 200);
    }
    function login(Request $request)
    {
        $credentials = $request->only('username','password');
       
        $key ="Hello Mr.Linh";   
        if(Auth::Attempt($credentials)){
            $user = Auth::user();
            $userId = $user->id;
            $data =array(
            "user_id"=>$userId
            ); 
              $token = JWT::encode($data, $key);
              $responData = array("user_id"=>$token);
              return response()->json($responData,200);
           }else{
               $array = array("user_id"=>null);
                return response()->json($array,400);
           }  
    }
    function profile($id){
        $user = DB::table('users')->where('id',$id)->first();
        return json_encode($user);
    }
    
    function getProfile(){
        $token = request()->header("Authorization");
        $key ="Hello Mr.Linh"; 
        $data = JWT::decode($token, $key, array('HS256'));

        $user = DB::table('users')->find($data->user_id);
        $responData = array("user"=>$user);
        return response()->json($responData, 200);
    }
   function updateinfo($id, Request $request){
       $name = $request->name;
       $addres = $request->addres;
       $birth = $request->birth;
       $description = $request->description;
       $height = $request->height;
       $weight = $request->weight;
       
       $user = User::where('id', $id)->first();
       $user->name = $name;
       $user->addres = $addres;
       $user->birth = $birth;
       $user->description = $description;
       $user->height = $height;
       $user->weight = $weight;
       $user->save();
   }
}
    

