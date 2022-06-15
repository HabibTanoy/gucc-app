<?php

namespace App\Http\Controllers;

use App\ImageUploads\Images;
use App\Models\SpecialAssistant;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SpecialAssistantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $special_assistant = SpecialAssistant::paginate(20);
        return view('special-assistant.index', compact('special_assistant'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('special-assistant.create');
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
        $facilities = SpecialAssistant::create([
            'image' => $image_file_path,
            'card_title' => $card_title,
            'card_body_details' => strip_tags($card_body)
        ]);

        return redirect()->route('special-assistant.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SpecialAssistant  $specialAssistant
     * @return \Illuminate\Http\Response
     */
    public function show(SpecialAssistant $specialAssistant)
    {
        $specialAssistant = SpecialAssistant::find($specialAssistant->id);
        $specialAssistant->update(['is_active' => !$specialAssistant->is_active]);
        return redirect()->route('special-assistant.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SpecialAssistant  $specialAssistant
     * @return \Illuminate\Http\Response
     */
    public function edit(SpecialAssistant $specialAssistant)
    {
        $update_data = SpecialAssistant::where('id', $specialAssistant->id)
            ->first();
        return view('special-assistant.update_table', compact('update_data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SpecialAssistant  $specialAssistant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SpecialAssistant $specialAssistant)
    {
        $card_title = $request->card_title;
        $card_body = $request->card_body_details;
        $specialAssistant_update = [
            'card_title' => $card_title,
            'card_body_details' => strip_tags($card_body)
        ];
        if ($request->hasFile('image_upload')) {
            $file_handler = new Images();
            $current_time = Carbon::now()->toDateTimeString();
            $file_name = str_replace(array(':', ' ', '-'), '_', $current_time) . '_' .rand(1000, 9999);
            $image_file_path = $file_handler->uploadFile($request->file('image_upload'), $file_name);
            $specialAssistant_update['image'] = $image_file_path;
        }

        $specialAssistant_update = SpecialAssistant::find($specialAssistant->id)
            ->update($specialAssistant_update);
        return redirect()->route('special-assistant.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SpecialAssistant  $specialAssistant
     * @return \Illuminate\Http\Response
     */
    public function destroy(SpecialAssistant $specialAssistant)
    {
        SpecialAssistant::where('id', $specialAssistant->id)
            ->delete();
        return redirect()->route('special-assistant.index');
    }
}
