<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;

class TestController extends BaseController
{
    public function test(){
      $furnizori=DB::select('Select * from FURNIZORI');
      var_dump($furnizori);
    }
}
