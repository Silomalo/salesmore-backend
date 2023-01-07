<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Category;
use App\Models\Image;
use App\Models\Youtube;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use File;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function productsAPI()
    {
        // get all categories and projects
        $categories = Category::all();
        $projects = Project::all();
        // dd($projects);
        return response()->json([
            'categories' => $categories,
            'projects' => $projects,
        ]);
    }
    public function proAdmin()
    {
        // all categories
        $categories = Category::all();
        // all projects
        $header = DB::table('companies')
            ->select('*')
            ->get();
        $project = DB::table('projects')
            ->select('*')
            ->get();
        //dd($header);
        return view('cms.projects', [
            'header' => $header,
            'category' => $categories,
            'project' => $project,
        ]);
    }

    public function project(Request $request)
    {
        // generaate project unique id
        //auth name
        $auth = Auth::user()->name;

        $pr = new Project();
        if (($request->file('image') != NULL)) {
            //dd('hapo 2');
            if (($request->file('image')->getSize()) < 10097152) {
            } else {
                return redirect()->back()->with('error', 'Too Large Project image; maxSize=10014kbs !');
            }
        } else {
            return redirect()->back()->with('error', 'Project image cannot be Empty !');
        }

        if ($request->hasFile('image')) {
            $extension = $request->image->getClientOriginalName();
            $request->image->storeAs('/public/products/', date("dmYhis") . $extension);
            $pr->image = Storage::url('products/' . date("dmYhis") . $extension);
        }

        $pr->name = $request->input('name');
        // $previousid = DB::table('projects')->select('pid')->orderBy('id', 'desc')->first();
        $pr->pid = $this->productidgenerator();
        $pr->category = $request->input('category');
        $pr->price = $request->input('price');
        $pr->cost = $request->input('cost');
        $pr->description = $request->input('desc');
        $pr->authoredby = $auth;
        $pr->save();
        return redirect()->back()->with('success', 'Product Image & Details Added Successfully!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function productidgenerator()
    {
        $lastitem = Project::latest()->first();
        if (!$lastitem) {
            return 'item-01';
        }
        $itemId = $lastitem->pid;
        $itemIdNumber = (int) str_replace('item-', '', $itemId);
        $newitemIdNumber = $itemIdNumber + 1;
        $newitemId = 'item-' . str_pad($newitemIdNumber, 2, '0', STR_PAD_LEFT);
        return $newitemId;
    }

    /* update about image and text */
    public function updatingProject(Request $request, Project $project, $id)
    {
        $previmage = Project::find($id);
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
            $request->image->storeAs('/public/products/', date("dmYhis") . $extension);
            $pimage = '/storage/products/' . date("dmYhis") . $extension;
            DB::table('projects')
                ->where('id', $id)
                ->update([
                    'image' => $pimage,
                ]);
        }

        DB::table('projects')
            ->where('id', $id)
            ->update([
                'name' => $request->input('name'),
                'category' => $request->input('category'),
                'price' => $request->input('price'),
                'cost' => $request->input('cost'),
                'authoredby' => Auth::user()->name,
                'description' => $request->input('desc'),

            ]);
        return redirect()->back()->with('success', 'Product Updated Successfully!');
    }

    //get project by id
    public function productDetails($id)
    {
        //get project by id
        $product = Project::where('pid', $id)->first();
        //get youtube where pid = id
        $youtube = Youtube::where('pid', $id)->first();
        //get images where pid = id
        $images = Image::where('pid', $id)->get();
        // dd($images);
        return response()->json([
            'product' => $product,
            'youtube' => $youtube,
            'images' => $images,
        ]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroyProject(Project $project, $id)
    {

        $pr = Project::find($id);
        // delete image
        $image = $pr->image;
        $image = str_replace('/storage', 'public', $image);
        Storage::delete($image);

        $pr->delete();
        return redirect()->back()->with('error', 'Project Deleted Successfully!');
    }
}