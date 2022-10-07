<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserMaster;

class UserMasterController extends Controller
{
  
    public function getAllUsers() {
      $user_master = UserMaster::get()->toJson(JSON_PRETTY_PRINT);
      return response($user_master, 200);
    }
  
    public function createUser(Request $request) {
      $user_master = new UserMaster;
      $user_master->user_name = $request->user_name;
      $user_master->mail_address = $request->mail_address;
      $user_master->password = $request->password;
      $user_master->save();

      return response()->json([
          "message" => "user record created"
      ], 201);
    }
  
    public function getUser($id) {
      if(UserMaster::where('id', $id)->exists()) {
        $user_master = UserMaster::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
        return response($user_master, 200);
      } else {
        return response()->json([
          "message" => "User not found"
        ], 404);
      }
    }
}

