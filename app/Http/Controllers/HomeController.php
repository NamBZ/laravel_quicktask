<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('welcome', [
            'posts' => $posts,
        ]);
    }

    public function changeLang($language)
    {
        App::setLocale($language);
        session()->put('locale', $language);
        //return view('dashboard');

        return redirect()->back();
    }
}
