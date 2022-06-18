<?php

namespace App\Http\Controllers;

use App\ImageUploads\Images;
use App\Models\Facilities;
use App\Models\News;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Team;
use App\Models\Tutorial;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('fronted');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->user_type == 0){
            return $this->fronted();
        } elseif (Auth::user()->user_type == 1){
            return view('home');
        }
    }

    public function slider()
    {
        return view('slider');
    }

    public function fronted()
    {
        $images = Slider::active()->get();
        $facilities = Facilities::active()->get();
        $news = News::active()->get();
        $teams = Team::active()->get();

        return view('frontend.home_new', compact('images', 'facilities', 'news', 'teams'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
