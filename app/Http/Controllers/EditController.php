<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Input;
use Session;
use DB;
use Auth;

class EditController extends BaseController
{
    public function index(){
      return view('pages.edit');
    }

    public function update($id){
      $nume = Input::has('name') ? Input::get('name') : null;
      $parola=bcrypt(Input::has('password') ? Input::get('password') : null);
      DB::table('users')
            ->where('id',$id)
            ->update(['NUME' => $nume,'password' => $parola]);
      Session::flash('succes','Contul a fost editat cu succes');
      return redirect('/edit');
    }

    public function delete(){
      $user= \App\User::findOrFail(Auth::user()->id);
      $user->delete();
      return redirect('home');
    }
}
