<?php

namespace App\Http\Controllers;

use App\ImageUploads\Images;
use App\Models\News;
use App\Models\Team;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::paginate(20);
        return view('teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teams.create');
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
        $image_file_path = $file_handler->uploadFile($request->file('teams_upload'), $file_name);

        $card_title = $request->card_title;
        $card_body = $request->card_body_details;
        $facilities = Team::create([
            'image' => $image_file_path,
            'card_title' => $card_title,
            'card_body_details' => strip_tags($card_body)
        ]);

        return redirect()->route('teams.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show($teams_id)
    {
        $team = Team::find($teams_id);
        $team->update(['is_active' => !$team->is_active]);
        return redirect()->route('teams.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $update_data = Team::where('id', $id)
            ->first();
        return view('teams.update_table', compact('update_data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $id)
    {
        $card_title = $request->card_title;
        $card_body = $request->card_body_details;
        $news = [
            'card_title' => $card_title,
            'card_body_details' => strip_tags($card_body)
        ];
        if ($request->hasFile('teams_upload')) {
            $file_handler = new Images();
            $current_time = Carbon::now()->toDateTimeString();
            $file_name = str_replace(array(':', ' ', '-'), '_', $current_time) . '_' .rand(1000, 9999);
            $image_file_path = $file_handler->uploadFile($request->file('teams_upload'), $file_name);
            $news['image'] = $image_file_path;
        }

        $facilities_update = Team::find($id)
            ->update($news);
        return redirect()->route('teams.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $id)
    {
        Team::where('id', $id)
            ->delete();
        return redirect()->route('teams.index');
    }
}
