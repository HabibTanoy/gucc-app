<?php

namespace App\Http\Controllers;

use App\ImageUploads\Images;
use App\Models\ActivityNews;
use App\Models\Advisor;
use App\Models\Ags;
use App\Models\Blog;
use App\Models\Committee;
use App\Models\Event;
use App\Models\FormerCommittee;
use App\Models\Founder;
use App\Models\Gallery;
use App\Models\MediaCoverage;
use App\Models\Osa;
use App\Models\Portfolio;
use App\Models\SpecialAssistant;
use App\Models\Tutorial;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OsaFrontendController extends Controller
{
    public function acc()
    {
        return view('frontend.about_acc');
    }

    public function rules()
    {
        return view('frontend.rules_and_regulation');
    }

    public function teams()
    {
        return view('frontend.teams');
    }

    public function policy()
    {
        return view('frontend.policy');
    }
    public function osa()
    {
        $osas = Osa::active()->get();
        $special_assistant = SpecialAssistant::active()->get();
        return view('frontend.osa', compact('osas', 'special_assistant'));
    }

    public function founder()
    {
        $founders = Founder::active()->get();
        return view('frontend.founders', compact('founders'));
    }

    public function executive_committee()
    {
        $executive_committees = Committee::active()->get();
        $agss = Ags::active()->get();
        return view('frontend.executive_committee', compact('executive_committees', 'agss'));
    }

    public function former_committee()
    {
        $former_committees = FormerCommittee::active()->get();
        return view('frontend.former_committees', compact('former_committees'));
    }

    public function advisor()
    {
        $advisors = Advisor::active()->get();
        $founders = Founder::active()->get();;
        return view('frontend.advisors', compact('advisors', 'founders'));
    }

    public function activity_news()
    {
        $activities_news = ActivityNews::active()->get();
        return view('frontend.activity_and_news', compact('activities_news'));
    }

    public function events()
    {
        $events = Event::active()->get();
        return view('frontend.events', compact('events'));
    }

    public function gallery()
    {
        $galleries = Gallery::active()->get();
        return view('frontend.gallery', compact('galleries'));
    }

    public function media_coverage()
    {
        $media_coverages = MediaCoverage::active()->get();
        return view('frontend.media_coverage', compact('media_coverages'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function recent_view()
    {
//        $news = News::where('id', $id)->get();
        return view('frontend.recent_view');
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
            'name' => $request->name,
            'developer_type' => $request->type,
            'cv' => $cv_file_path,
        ]);
        return $this->cv_list();
    }
    public function tutorial()
    {
        $subjects = [
            'HTML' => 1,
            'JAVASCRIPT' => 2
        ];
        return view('frontend.programming_tutorial', compact('subjects'));
    }

    public function video_play($id)
    {
        $tutorials = Tutorial::where('subject_type', $id)->get();
        return view('frontend.video_play', compact('tutorials'));
    }

    public function cv_list()
    {
        $frontend_cv = Portfolio::where('developer_type', '=', 1)
            ->get();
        $backend_cv = Portfolio::where('developer_type', '=', 2)
            ->get();
        return view('frontend.cv_list', compact('frontend_cv', 'backend_cv'));
    }

    public function gallery_list()
    {
        return view('frontend.gallery_list');
    }

    public function create_blog()
    {
        return view('frontend.create_blogs');
    }

    public function blog_store(Request $request)
    {
        Blog::create([
            'name' => $request->name,
            'title' => $request->title,
            'body_details' => $request->body_details
        ]);
        return $this->blog_show();
    }

    public function blog_show()
    {
        $blogs = Blog::all();
        return view('frontend.view_blogs', compact('blogs'));
    }
    public function blog_view($id)
    {
        $blogs = Blog::where('id', $id)->get();
        return view('frontend.blog_view', compact('blogs'));
    }
}
