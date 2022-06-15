<?php

namespace App\Http\Controllers;

use App\ImageUploads\Images;
use App\Models\FormerCommittee;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FormerCommitteeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $former_committees = FormerCommittee::paginate(20);
        return view('former-committee.index', compact('former_committees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('former-committee.create');
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
        $facilities = FormerCommittee::create([
            'image' => $image_file_path,
            'card_title' => $card_title,
            'card_body_details' => strip_tags($card_body)
        ]);

        return redirect()->route('former-committee.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FormerCommittee  $formerCommittee
     * @return \Illuminate\Http\Response
     */
    public function show(FormerCommittee $former_committee)
    {
        $former_committee = FormerCommittee::find($former_committee->id);
        $former_committee->update(['is_active' => !$former_committee->is_active]);
        return redirect()->route('former-committee.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FormerCommittee  $formerCommittee
     * @return \Illuminate\Http\Response
     */
    public function edit(FormerCommittee $former_committee)
    {
        $update_data = FormerCommittee::where('id', $former_committee->id)
            ->first();
        return view('former-committee.update_table', compact('update_data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FormerCommittee  $formerCommittee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormerCommittee $former_committee)
    {
        $card_title = $request->card_title;
        $card_body = $request->card_body_details;
        $former_committee_update = [
            'card_title' => $card_title,
            'card_body_details' => strip_tags($card_body)
        ];
        if ($request->hasFile('image_upload')) {
            $file_handler = new Images();
            $current_time = Carbon::now()->toDateTimeString();
            $file_name = str_replace(array(':', ' ', '-'), '_', $current_time) . '_' .rand(1000, 9999);
            $image_file_path = $file_handler->uploadFile($request->file('image_upload'), $file_name);
            $former_committee_update['image'] = $image_file_path;
        }

        $former_committee_update = FormerCommittee::find($former_committee->id)
            ->update($former_committee_update);
        return redirect()->route('former-committee.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FormerCommittee  $formerCommittee
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormerCommittee $former_committee)
    {
        FormerCommittee::where('id', $former_committee->id)
            ->delete();
        return redirect()->route('former-committee.index');
    }
}
