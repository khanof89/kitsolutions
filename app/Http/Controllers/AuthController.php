<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class AuthController extends Controller {

  public function doLogin(Request $request)
  {
    if(\Auth::attempt(['email' => $request->email, 'password' => $request->password]))
    {
      return json_encode('success');
    }
  }

  public function doRegister(Request $request)
  {
    try
    {
      $name = $request->name;
      $email = $request->email;
      $password = $request->password;

      $user = new User();
      $user->name = $name;
      $user->email = $email;
      $user->password = bcrypt($password);
      $user->save();

      return json_encode('success');
    }
    catch(\Exception $e)
    {
      return json_encode('failure');
    }

  }
}
