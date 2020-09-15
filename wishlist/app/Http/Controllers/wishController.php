<?php

namespace App\Http\Controllers;

use App\wish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class wishController extends Controller
{
  public function index() {
      $wishes = wish::all();
      return view('/wishlist', ['wishes' => $wishes]);
  }

  public function store(Request $request) {

      if($request->hasFile('wish_image')){
          $filenameWithExt = $request->file('wish_image')->getClientOriginalName();

          $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
          $extension = $request->file('wish_image')->getClientOriginalExtension();
          $fileNameToStore = $filename.'_'.time().'.'.$extension;

          $path = $request->file('wish_image')->storeAs('public/wish_images', $fileNameToStore);
      }else{
          $fileNameToStore = 'noImage.jpg';
      }

      if(Auth::user()){
          $wish = new Wish();
          $wish->wish_name = request('name');
          $wish->description = request('description');
          $wish->price = request('price');
          $wish->url = request('url');
          $wish->image = $fileNameToStore;
          $wish->user_id = Auth::user()->id;
          $wish->save();
          return redirect('/');
      }else{
          return redirect('/login');
      }

  }



  public function edit ($id) {
      $wish = wish::find($id);
      return view('/edit', ['wish' => $wish]);
  }

    public function update($id, Request $request) {
        $wish = wish::find($id);
        $wish->description = $request->description;
        $wish->save();
        return redirect('/wishlist');
    }

    public function delete($id) {
//        $wish = wish::find($id);
//        wish::destroy($id);


        $wish = wish::find($id);

        if (!$wish) return "wish not found";

        $wish->delete();

        return redirect('/wishlist');
    }

}
