<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rewiw;

class HomeController extends Controller
{
    public function home(){
        return view(view:'home');
    }
    public function about(){
        return view(view:'about');
    }
    public function revies(){
        $rewiws = new Rewiw();
        return view(view:'revies');
       
        //dd($rewiws->all());
    
    }
    public function revies_check(Request $request){
       //dd($request);
       $valid = $request->validate([
           'email'=>'required|min:4|max:100',
           'subject'=>'required|min:4|max:150',
           'message'=>'required|min:15|max:500',
           

       ]);


       $rewiws = new Rewiw(); 
       $rewiws->email =$request->input(key:'email');
       $rewiws->subject =$request->input(key:'subject');
       $rewiws->message =$request->input(key:'message');
        $rewiws->save();
       return redirect()->route(route:'revies');
    }
}
