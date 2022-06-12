<?php

namespace App\Http\Controllers;

use App\ImageUploads\Images;
use App\Models\Facilities;
use App\Models\News;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RecentNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::paginate(20);
        return view('recent-news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recent-news.create');
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
        $image_file_path = $file_handler->uploadFile($request->file('news_upload'), $file_name);

        $card_title = $request->card_title;
        $card_body = $request->card_body_details;
        $facilities = News::create([
            'image' => $image_file_path,
            'card_title' => $card_title,
            'card_body_details' => strip_tags($card_body)
        ]);

        return redirect()->route('recent-news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($news_id)
    {
        $news = News::find($news_id);
        $news->update(['is_active' => !$news->is_active]);
        return redirect()->route('recent-news.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $update_data = News::where('id', $id)
            ->first();
        return view('recent-news.update_table', compact('update_data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $card_title = $request->card_title;
        $card_body = $request->card_body_details;
        $news = [
            'card_title' => $card_title,
            'card_body_details' => strip_tags($card_body)
        ];
        if ($request->hasFile('news_upload')) {
            $file_handler = new Images();
            $current_time = Carbon::now()->toDateTimeString();
            $file_name = str_replace(array(':', ' ', '-'), '_', $current_time) . '_' .rand(1000, 9999);
            $image_file_path = $file_handler->uploadFile($request->file('news_upload'), $file_name);
            $news['image'] = $image_file_path;
        }

        $facilities_update = News::find($id)
            ->update($news);
        return redirect()->route('recent-news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News::where('id', $id)
            ->delete();
        return redirect()->route('recent-news.index');
    }
}
