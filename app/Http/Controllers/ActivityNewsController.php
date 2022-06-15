<?php

namespace App\Http\Controllers;

use App\ImageUploads\Images;
use App\Models\ActivityNews;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ActivityNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activities_news = ActivityNews::paginate(20);
        return view('activity-news.index', compact('activities_news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('activity-news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file_handler = new Images();
        $current_time = Carbon::now()->toDateTimeString();
        $file_name = str_replace(array(':', ' ', '-'), '_', $current_time) . '_' .rand(1000, 9999);
        $image_file_path = $file_handler->uploadFile($request->file('image_upload'), $file_name);

        $card_title = $request->card_title;
        $card_body = $request->card_body_details;
        $facilities = ActivityNews::create([
            'image' => $image_file_path,
            'card_title' => $card_title,
            'card_body_details' => strip_tags($card_body)
        ]);

        return redirect()->route('activity-news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ActivityNews  $activityNews
     * @return \Illuminate\Http\Response
     */
    public function show(ActivityNews $activity_news)
    {
        $activity_news = ActivityNews::find($activity_news->id);
        $activity_news->update(['is_active' => !$activity_news->is_active]);
        return redirect()->route('activity-news.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ActivityNews  $activityNews
     * @return \Illuminate\Http\Response
     */
    public function edit(ActivityNews $activity_news)
    {
        $update_data = ActivityNews::where('id', $activity_news->id)
            ->first();
        return view('activity-news.update_table', compact('update_data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ActivityNews  $activityNews
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ActivityNews $activity_news)
    {
        $card_title = $request->card_title;
        $card_body = $request->card_body_details;
        $activity_news_update = [
            'card_title' => $card_title,
            'card_body_details' => strip_tags($card_body)
        ];
        if ($request->hasFile('image_upload')) {
            $file_handler = new Images();
            $current_time = Carbon::now()->toDateTimeString();
            $file_name = str_replace(array(':', ' ', '-'), '_', $current_time) . '_' .rand(1000, 9999);
            $image_file_path = $file_handler->uploadFile($request->file('image_upload'), $file_name);
            $activity_news_update['image'] = $image_file_path;
        }

        $activity_news_update = ActivityNews::find($activity_news->id)
            ->update($activity_news_update);
        return redirect()->route('activity-news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ActivityNews  $activityNews
     * @return \Illuminate\Http\Response
     */
    public function destroy(ActivityNews $activity_news)
    {
        ActivityNews::where('id', $activity_news->id)
            ->delete();
        return redirect()->route('activity-news.index');
    }
}
