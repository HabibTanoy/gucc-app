<?php

namespace App\Http\Controllers;

use App\ImageUploads\Images;
use App\Models\Gallery;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::paginate(20);
        return view('gallery.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gallery.create');
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
        $facilities = Gallery::create([
            'image' => $image_file_path,
            'card_title' => $card_title,
            'card_body_details' => strip_tags($card_body)
        ]);

        return redirect()->route('gallery.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        $gallery = Gallery::find($gallery->id);
        $gallery->update(['is_active' => !$gallery->is_active]);
        return redirect()->route('gallery.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        $update_data = Gallery::where('id', $gallery->id)
            ->first();
        return view('gallery.update_table', compact('update_data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        $card_title = $request->card_title;
        $card_body = $request->card_body_details;
        $gallery_update = [
            'card_title' => $card_title,
            'card_body_details' => strip_tags($card_body)
        ];
        if ($request->hasFile('image_upload')) {
            $file_handler = new Images();
            $current_time = Carbon::now()->toDateTimeString();
            $file_name = str_replace(array(':', ' ', '-'), '_', $current_time) . '_' .rand(1000, 9999);
            $image_file_path = $file_handler->uploadFile($request->file('image_upload'), $file_name);
            $gallery_update['image'] = $image_file_path;
        }

        $gallery_update = Gallery::find($gallery->id)
            ->update($gallery_update);
        return redirect()->route('gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        Gallery::where('id', $gallery->id)
            ->delete();
        return redirect()->route('gallery.index');
    }
}
