<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserMasterController extends Controller
{
    public function getAllUser() {
      // logic to get all students goes here
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
      // logic to get a student record goes here
    }
}

