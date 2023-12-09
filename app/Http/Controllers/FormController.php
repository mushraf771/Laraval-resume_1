<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistrationRequest;
class FormController extends Controller
{
  function show(){
    print_r('get function ');
        return view('form');
  }
  function showPost(RegistrationRequest $request){
  // function showPost(Request $request){

    // print_r('Post function ');
        // print_r($request->input('name'));
        // dd($request->name);
    // if ($request->has(['name','email'])){
    //        print_r($request->name);
    // }
    // $request->flash();
        // print_r($request->old('name'));
        // print_r($request->old('email'));
        // print_r($request->old('password'));


        // validate
        // single
    // $validate = $request->validate([
    //   'name' => 'required',
    //   'email' => 'required',
    //   'password' => 'required',
    // ]);
    // multiple
    // $validate = $request->validate([
    //   'name' => 'required |min:5',
    //   'email' => 'required|min:5',
    //   'password' => 'required|min:5',
    // ]);
    print_r("Form Validate");
    $request->validated();
    $input = $request->except('_token');
    //  $request->flash();
        return view('form',['data'=>$input]);
  }
}
