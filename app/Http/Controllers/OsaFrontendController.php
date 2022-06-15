<?php

namespace App\Http\Controllers;

use App\Models\ActivityNews;
use App\Models\Advisor;
use App\Models\Ags;
use App\Models\Committee;
use App\Models\Event;
use App\Models\FormerCommittee;
use App\Models\Founder;
use App\Models\Gallery;
use App\Models\MediaCoverage;
use App\Models\Osa;
use App\Models\SpecialAssistant;
use Illuminate\Http\Request;

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
}
