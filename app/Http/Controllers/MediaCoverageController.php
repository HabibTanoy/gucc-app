<?php

namespace App\Http\Controllers;

use App\ImageUploads\Images;
use App\Models\MediaCoverage;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MediaCoverageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $media_coverages = MediaCoverage::paginate(20);
        return view('media-coverage.index', compact('media_coverages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('media-coverage.create');
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
        $facilities = MediaCoverage::create([
            'image' => $image_file_path,
            'card_title' => $card_title,
            'card_body_details' => strip_tags($card_body)
        ]);

        return redirect()->route('media-coverage.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MediaCoverage  $mediaCoverage
     * @return \Illuminate\Http\Response
     */
    public function show(MediaCoverage $media_coverage)
    {
        $media_coverage = MediaCoverage::find($media_coverage->id);
        $media_coverage->update(['is_active' => !$media_coverage->is_active]);
        return redirect()->route('media-coverage.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MediaCoverage  $mediaCoverage
     * @return \Illuminate\Http\Response
     */
    public function edit(MediaCoverage $media_coverage)
    {
        $update_data = MediaCoverage::where('id', $media_coverage->id)
            ->first();
        return view('media-coverage.update_table', compact('update_data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MediaCoverage  $mediaCoverage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MediaCoverage $media_coverage)
    {
        $card_title = $request->card_title;
        $card_body = $request->card_body_details;
        $media_coverage_update = [
            'card_title' => $card_title,
            'card_body_details' => strip_tags($card_body)
        ];
        if ($request->hasFile('image_upload')) {
            $file_handler = new Images();
            $current_time = Carbon::now()->toDateTimeString();
            $file_name = str_replace(array(':', ' ', '-'), '_', $current_time) . '_' .rand(1000, 9999);
            $image_file_path = $file_handler->uploadFile($request->file('image_upload'), $file_name);
            $media_coverage_update['image'] = $image_file_path;
        }

        $media_coverage_update = MediaCoverage::find($media_coverage->id)
            ->update($media_coverage_update);
        return redirect()->route('media-coverage.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MediaCoverage  $mediaCoverage
     * @return \Illuminate\Http\Response
     */
    public function destroy(MediaCoverage $media_coverage)
    {
        MediaCoverage::where('id', $media_coverage->id)
            ->delete();
        return redirect()->route('media-coverage.index');
    }
}
