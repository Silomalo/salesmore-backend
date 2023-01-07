<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use File;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function slides()
    {

        $header = DB::table('companies')
            ->select('*')
            ->get();
        $slider = DB::table('slides')
            ->select('*')
            ->get();
        $img =DB::table('companies')->get('logo');
        $presence=isset($name) && is_null($img);
        //dd($presence);
        return view('cms.crousel',[
        'header' => $header,
        'slider' => $slider,
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
    public function slider(Request $request)
    {
        //auth name
        $auth = Auth::user()->name;
        $slide = new Slide();
            if( ($request->file('slider') != NULL)  ){
                //dd('hapo 2');
                if( ($request->file('slider')->getSize())<10097152  ){   }else{ return redirect()->back() ->with('error', 'Too Large Sliding image; maxSize=10014kbs !');
            }}else{return redirect()->back() ->with('error', 'Slider image cannot be Empty !'); }

                if ($request->hasFile('slider')) {
                    //dd("shadkjashk");
                    $extension = $request->slider->getClientOriginalName();
                    $request->slider->storeAs('/public/slider/', date("dmYhis").$extension);
                    $slide->image = Storage::url( 'slider/'.date("dmYhis").$extension);
                }

            $slide->title=$request->input('title');
            $slide->price=$request->input('price');
            $slide->description=$request->input('desc');
            $slide->authoredby=$auth;
            $slide->save();

            return redirect()->back()->with('success', 'Slider & Details Added Successfully!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function slidesAPI()
    {
        $slides = Slide::all();
        // dd($slides);
        return response()->json([
            'status' => 200,
            'slides' => $slides,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //
    }
    public function updateLogo(Request $request, Company $company)
    {
        $id = $request->input('id');
        if( ($request->file('logo') != NULL)  ){
            if( ($request->file('logo')->getSize())<1097152  ){   }else{ return redirect('/admin-home')->with('error', 'Too Large Image; maxSize=1014kbs !');
        }}
        $header = Company::find($id);
        //dd('imafika hapa');
        if ($request->hasFile('logo')) {
            if(File::exists(public_path($header->logo))){
                File::delete(public_path($header->logo));
            }
            $extension = $request->logo->getClientOriginalName();
            $request->logo->storeAs('/public/home/logo/', date("dmYhis").$extension);
            $imagePic = Storage::url( 'home/logo/'.date("dmYhis").$extension);
            DB::table('companies')->where('id', $id)->update(['logo'=>$imagePic,]);
        }
        return redirect('/admin-home')->with('success', 'Image and Logo Updated Successfully!');
    }

    public function updatePhoneNumber(Request $request, Company $company)
    {
        $id = $request->input('id');
        $phone = $request->input('phoneNo');
        //dd($caption1);
        DB::table('companies')
            ->where('id', $id)
            ->update([
                'phone'=>$phone,
            ]);
            return redirect()->back() ->with('success', 'Phone-Number Updated Successfully!');
    }

    public function updateImage(Request $request, Slide $slide)
    {
        $id = $request->input('id');
        $slider = Slide::find($id);
            //dd($slider);

        if ($request->hasFile('img')) {
            if(File::exists(public_path($slider->image))){
                File::delete(public_path($slider->image));
            }else{return redirect()->back()   ->with('error', 'Unsucessful! On Update Deletion');}
            $extension = $request->img->getClientOriginalName();
            $request->img->storeAs('/public/slider/', date("dmYhis").$extension);
            $imagePic = Storage::url( 'slider/'.date("dmYhis").$extension);
            DB::table('slides')->where('id', $id)->update(['image'=>$imagePic,]);
        }
        DB::table('slides')
        ->where('id', $id)
            ->update([
                'title' => $request->input('title'),
                'price' => $request->input('price'),
                'description' => $request->input('desc'),
                'authoredby' => Auth::user()->name,
            ]);

        return redirect()->back()->with('success', ' Slider Image Changed Successfully!');
    }

    public function updateAboutSection(Request $request, Company $company)
    {
        $id = $request->input('id');
        $cp = Company::find($id);
            //dd($slider);

        if ($request->hasFile('image')) {
            if(File::exists(public_path($company->image))){
                File::delete(public_path($company->image));
            }else{return redirect()->back()   ->with('error', 'Unsucessful! On Update Deletion');}
            $extension = $request->image->getClientOriginalName();
            $request->image->storeAs('/public/images/', date("dmYhis").$extension);
            $imagePic = Storage::url( 'images/'.date("dmYhis").$extension);
            DB::table('companies')->where('id', $id)->update(['image'=>$imagePic,]);
        }

        if ($request->input('about')) {
        $about = $request->input('about');
        DB::table('companies')
            ->where('id', $id)
            ->update([
                'about'=>$about,
            ]);
        }
        return redirect()->back()->with('success', ' About Company Image Changed Successfully!');
    }
    // public function updateTitle(Request $request, Slide $slide)
    // {
    //     $id = $request->input('id');
    //     $title = $request->input('title');


    //     DB::table('slides')
    //         ->where('id', $id)
    //         ->update([
    //             'title'=>$title,
    //         ]);


    //     return redirect()->back()->with('success', 'Slider title Updated Successfully!');
    // }
    // public function updateDescription(Request $request, Slide $slide)
    // {
    //     $id = $request->input('id');
    //     $desc = $request->input('desc');


    //     DB::table('slides')
    //         ->where('id', $id)
    //         ->update([
    //             'description'=>$desc,
    //         ]);


    //     return redirect()->back()->with('success', 'Slider Details Updated Successfully!');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroySlider(Company $company, $id)
    {
        $slider = Slide::find($id);
        $path=$slider->image;
        //dd($path);
        if(File::exists(public_path($slider->image))){
            File::delete(public_path($slider->image));
            $slider->delete();
        }else{
            return redirect()->back()   ->with('error', 'Deletion Unsucessful!');
        }
        return redirect()->back()   ->with('error', 'Product Deleted Successfully!');
    }
}