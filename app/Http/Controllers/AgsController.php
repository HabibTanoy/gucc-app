<?php

namespace App\Http\Controllers;

use App\ImageUploads\Images;
use App\Models\Ags;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AgsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agss = Ags::paginate(20);
        return view('ags.index', compact('agss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ags.create');
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
        $facilities = Ags::create([
            'image' => $image_file_path,
            'card_title' => $card_title,
            'card_body_details' => strip_tags($card_body)
        ]);

        return redirect()->route('ags.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ags  $ags
     * @return \Illuminate\Http\Response
     */
    public function show(Ags $ag)
    {
        $ag = Ags::find($ag->id);
        $ag->update(['is_active' => !$ag->is_active]);
        return redirect()->route('ags.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ags  $ags
     * @return \Illuminate\Http\Response
     */
    public function edit(Ags $ag)
    {
        $update_data = Ags::where('id', $ag->id)
            ->first();
        return view('ags.update_table', compact('update_data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ags  $ags
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ags $ag)
    {
        $card_title = $request->card_title;
        $card_body = $request->card_body_details;
        $ags_update = [
            'card_title' => $card_title,
            'card_body_details' => strip_tags($card_body)
        ];
        if ($request->hasFile('image_upload')) {
            $file_handler = new Images();
            $current_time = Carbon::now()->toDateTimeString();
            $file_name = str_replace(array(':', ' ', '-'), '_', $current_time) . '_' .rand(1000, 9999);
            $image_file_path = $file_handler->uploadFile($request->file('image_upload'), $file_name);
            $ags_update['image'] = $image_file_path;
        }

        $ags_update = Ags::find($ag->id)
            ->update($ags_update);
        return redirect()->route('ags.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ags  $ags
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ags $ag)
    {
        Ags::where('id', $ag->id)
            ->delete();
        return redirect()->route('ags.index');
    }
}
