<?php

namespace App\Http\Controllers;

use App\ImageUploads\Images;
use App\Models\Facilities;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            return view('portfolio');
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
        $services = Service::where('is_active', '=', 1)
            ->get();
        $facilities = Facilities::active()->get();
        return view('frontend.home', compact('images', 'services', 'facilities'));
    }
    public function drop_portfolio()
    {
        return view('frontend.drop_portfolio');
    }

    public function upload(Request $request)
    {
        $file_handler = new Images();
        $current_time = Carbon::now()->toDateTimeString();
        $file_name = str_replace(array(':', ' ', '-'), '_', $current_time) . '_' .rand(100, 999);
        $cv_file_path = $file_handler->uploadFile($request->file('upload_file'), $file_name);

        $portfolio = Portfolio::create([
            'developer_type' => $request->type,
            'cv' => $cv_file_path,
        ]);
        return $this->fronted();
    }
    public function tutorial()
    {
        return view('frontend.programming_tutorial');
    }
}
