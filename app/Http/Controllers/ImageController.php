<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Youtube;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($pid)
    {
        //get first yothbe where project id is pid
        $youtube = Youtube::where('pid', $pid)->first();
        // if ($youtube == null) {
        //     //if youtube is null assign some random fillers
        //     $youtube = [
        //         'yvideo' => 'no video',
        //         'description' => 'no desription',
        //     ];
        // }
        // dd($youtube);
        $images = Image::where('pid', $pid)->get();
        //dd($images);
        return view('cms.description', [
            'pid' => $pid,
            'images' => $images,
            'youtube' => $youtube,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pr = new Image();
        if (($request->file('image') != NULL)) {
            //dd('hapo 2');
            if (($request->file('image')->getSize()) < 10097152) {
            } else {
                return redirect()->back()->with('error', 'Too Large Image; maxSize=10014kbs !');
            }
        } else {
            return redirect()->back()->with('error', 'Image cannot be Empty !');
        }

        if ($request->hasFile('image')) {
            $extension = $request->image->getClientOriginalName();
            $request->image->storeAs('/public/productsimages/', date("dmYhis") . $extension);
            $pr->image = Storage::url('productsimages/' . date("dmYhis") . $extension);
        }

        $pr->pid = $request->input('pid');
        $pr->title = $request->input('title');
        $pr->description = $request->input('description');
        $pr->save();
        return redirect()->back()->with('success', 'Image added successfully');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $previmage = Image::find($request->input('id'));
        if (($request->file('image') != NULL)) {
            //dd('hapo 2');
            if (($request->file('image')->getSize()) < 5000000) {
            } else {
                return redirect()->back()->with('error', 'Too Large  image, maxSize =< 5mb !');
            }
        }
        if ($request->hasFile('image')) {
            // delete old image
            $oldImage = $previmage->image;
            $oldImage = str_replace('/storage', 'public', $oldImage);
            // dd($oldImage);
            Storage::delete($oldImage);

            $extension = $request->image->getClientOriginalName();
            //replace  old image with new image
            $request->image->storeAs('/public/productsimages/', date("dmYhis") . $extension);
            $pimage = '/storage/productsimages/' . date("dmYhis") . $extension;
            DB::table('images')
            ->where('id', $request->input('id'))
                ->update([
                    'image' => $pimage,
                ]);
        }

        DB::table('images')
        ->where('id', $request->input('id'))
            ->update([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
            ]);
        return redirect()->back()->with('success', 'Image updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productimage = Image::find($id);
        // delete image
        $image = $productimage->image;
        $image = str_replace('/storage', 'public', $image);
        Storage::delete($image);
        $productimage->delete();
        return redirect()->back()->with('success', 'Image deleted successfully');
    }
}