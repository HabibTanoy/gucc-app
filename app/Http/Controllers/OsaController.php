<?php

namespace App\Http\Controllers;

use App\ImageUploads\Images;
use App\Models\Osa;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OsaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $osas = Osa::paginate(20);
        return view('osa.index', compact('osas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('osa.create');
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
        $facilities = Osa::create([
            'image' => $image_file_path,
            'card_title' => $card_title,
            'card_body_details' => strip_tags($card_body)
        ]);

        return redirect()->route('osa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Osa  $osa
     * @return \Illuminate\Http\Response
     */
    public function show($osa)
    {
        $osa = Osa::find($osa);
        $osa->update(['is_active' => !$osa->is_active]);
        return redirect()->route('osa.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Osa  $osa
     * @return \Illuminate\Http\Response
     */
    public function edit(Osa $osa)
    {
        $update_data = Osa::where('id', $osa->id)
            ->first();
        return view('osa.update_table', compact('update_data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Osa  $osa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Osa $osa)
    {
        $card_title = $request->card_title;
        $card_body = $request->card_body_details;
        $osa_update = [
            'card_title' => $card_title,
            'card_body_details' => strip_tags($card_body)
        ];
        if ($request->hasFile('image_upload')) {
            $file_handler = new Images();
            $current_time = Carbon::now()->toDateTimeString();
            $file_name = str_replace(array(':', ' ', '-'), '_', $current_time) . '_' .rand(1000, 9999);
            $image_file_path = $file_handler->uploadFile($request->file('image_upload'), $file_name);
            $osa_update['image'] = $image_file_path;
        }

        $osa_update = Osa::find($osa->id)
            ->update($osa_update);
        return redirect()->route('osa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Osa  $osa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Osa $osa)
    {
        Osa::where('id', $osa->id)
            ->delete();
        return redirect()->route('osa.index');
    }
}
