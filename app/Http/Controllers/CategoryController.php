<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
// use File;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::all();
        return view('cms.categories', compact('categories'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $category = new Category();
        if (($request->file('image') != NULL)) {
            //dd('hapo 2');
            if (($request->file('image')->getSize()) < 10097152) {
            } else {
                return redirect()->back()->with('error', 'Too Large image; maxSize=10014kbs !');
            }
        } else {
            return redirect()->back()->with('error', 'Category image cannot be Empty !');
        }

        if ($request->hasFile('image')) {
            $extension = $request->image->getClientOriginalName();
            $request->image->storeAs('/public/categories/', date("dmYhis") . $extension);
            $category->image = Storage::url('categories/' . date("dmYhis") . $extension);
        }
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->save();
        return redirect()->back()->with('success', 'Category Added Successfully!');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        //nkkdhgkhfdg
        $previmage = Category::find($request->input('id'));
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
            $request->image->storeAs('/public/categories/', date("dmYhis") . $extension);
            $pimage = '/storage/categories/' . date("dmYhis") . $extension;
            DB::table('images')
                ->where('id', $request->input('id'))
                ->update([
                    'image' => $pimage,
                ]);
        }

        DB::table('categories')
            ->where('id', $request->id)
            ->update([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
            ]);
        return redirect()->back()->with('success', 'Category Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category, $id)
    {
        //
        $category = Category::find($id);
        $category->delete();
        return redirect()->back()->with('success', 'Category Deleted Successfully!');
    }
}