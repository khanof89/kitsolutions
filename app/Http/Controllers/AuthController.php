<?php

namespace App\Http\Controllers;

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
}
