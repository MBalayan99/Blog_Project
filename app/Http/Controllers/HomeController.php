<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rewiw;
use App\Models\Posts;

class HomeController extends Controller
{
    public function home()
    {
        $posts = Posts::all();

        return view('home', compact('posts'));
    }
    public function about()
    {
        return view('about');
    }
    public function revies()
    {
        $rewiws = new Rewiw();
        return view('revies', ['rewiws' => $rewiws->all()]);

        // 


    }
    public function admin()
    {
        return view('admin');
    }

    public function revies_check(Request $request)
    {
        //dd($request);
        $valid = $request->validate([
            'email' => 'required|min:4|max:100',
            'subject' => 'required|min:4|max:150',
            'message' => 'required|min:15|max:800',


        ]);


        $rewiws = new Rewiw();
        $rewiws->email = $request->input('email');
        $rewiws->subject = $request->input('subject');
        $rewiws->message = $request->input('message');
        $rewiws->save();
        return redirect()->route('revies');
    }
    public function home_admin(Request $request)
    {

        $request->validate([

            //'text' => 'required|min:8|max:100',
            'title' => 'required|min:4|max:150',
            'desc' => 'required|min:15|max:800',

        ]);
        $posts = new Posts();
        if ($request->file()) {
            $filename            = time() . '_' . $request->image->getClientOriginalName();
            $pathname            = $request->file('image')->storeAs('uploads', $filename, 'public');
            $posts->image_name   = time() . '_' . $request->image->getClientOriginalName();
            $posts->image_path   = '/storage/' . $pathname;
            $posts->title        = $request->title;
            $posts->desc         = $request->desc;
            $posts->save();
            return redirect()->route('home')->with('success', 'sucsess');
        }
    }
}
