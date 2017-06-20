<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Input;
use Request;
use Redirect;
use Session;
use Auth;

class CartController extends BaseController
{
    public function add($id_produs){
      if(Auth::check()){
      $count=Session::get('itemCount');
      $vector=Session::get('vector');
      Session::put('itemCount',$count+1);
      $products= \App\Product::all();
      foreach ($products as $product) {
          if($product->id_produs==$id_produs) {
            array_push($vector,$product);
            $pret=Session::get('pretFinal');
            Session::put('pretFinal',$pret+$product->pret);
          }
      }
      Session::put('vector',$vector);
      return back()->withInput()->withProducts($products);
      }
      else{
      Session::put('itemCount',0);
      return redirect('/login');
      }
    }

    public function show(){
      $products=Session::get('vector');
      $pret=Session::get('pretFinal');
      return view('pages.cart')->withProducts($products)->withPret($pret);
    }

    public function delete($id){
      if(Auth::check()){
      $products=Session::get('vector');
      $pret=Session::get('pretFinal');
      $count=Session::get('itemCount');
      $pret=$pret-$products[$id]->pret;
      unset($products[$id]);
      $products2= array_values($products);
      $count=$count-1;
      Session::put('vector',$products2);
      Session::put('itemCount',$count);
      Session::put('pretFinal',$pret);
      return redirect('/cart');
      }
      else{
      Session::put('itemCount',0);
      return redirect('/login');
      }
    }

    public function finish(){
      if(Auth::check()){
      $products=array();
      Session::put('itemCount',0);
      Session::put('pretFinal',0);
      Session::put('vector',$products);
      Session::flash('succes','Multumim ! Comanda a fost livrata catre barman!');
      return view('pages.cart')->withProducts($products)->withPret(0);
      }
      else{
      Session::put('itemCount',0);
      return redirect('/login');
      }
    }

}
