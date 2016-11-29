<?php

  namespace App\Http\Controllers\Admin;

  use Illuminate\Http\Request;

  use App\Http\Requests;
  use App\Http\Controllers\Controller;
  use Auth;

  class LoginController extends Controller {
    public function showLogin()
    {
      return view('admin.login');
    }

    public function doLogin(Request $request)
    {
      $email = $request->email;
      $password = $request->password;

      if(Auth::attempt(['email' => $email, 'password' => $password]))
      {
        return redirect('admin/dashboard');
      }
      else
      {
        session()->flash('message', 'Incorrect details');
        return redirect()->back();
      }
    }
  }
