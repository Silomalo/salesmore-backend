<?php

namespace App\Http\Controllers;

use App\Models\Youtube;
use Illuminate\Http\Request;
// use DB
use Illuminate\Support\Facades\DB;

class YoutubeController extends Controller
{


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //get project id
        $pid = $request->input('pid');
        //get youtube linkfro YouTube
        $ytube = Youtube::where('pid', $pid)->first();
        if ($ytube == null) {
            $ytube = new Youtube();
            $ytube->pid = $pid;
            $ytube->yvideo = $request->input('youtube');
            $ytube->description = $request->input('description');
            $ytube->save();
        } else {
            DB::table('youtubes')->where('pid', $pid)->update(
                [
                    'yvideo' => $request->input('youtube'),
                    'description' => $request->input('description'),

                ]
            );
        }
        return redirect()->back()->with('success', 'Youtube link and detailed description updated successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Youtube  $youtube
     * @return \Illuminate\Http\Response
     */
    public function show(Youtube $youtube)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Youtube  $youtube
     * @return \Illuminate\Http\Response
     */
    public function edit(Youtube $youtube)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Youtube  $youtube
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Youtube $youtube)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Youtube  $youtube
     * @return \Illuminate\Http\Response
     */
    public function destroy(Youtube $youtube)
    {
        //
    }
}