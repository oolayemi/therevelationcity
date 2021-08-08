<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /*
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('blog', ['blogs' => $blogs]);
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

    /*
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'tags' => 'required',
            'story' => 'required',
        ]);

        $filename = str_replace(' ', '-', $request->file->getClientOriginalName());

        if (File::exists(public_path().'/blogs/'.$filename)){
            $filename = time() . '_' . str_replace(' ', '-', $request->file->getClientOriginalName());
        }

        $imagepath = $request->file('file')->storeAs('blogs', $filename, 'public');

        $blog = Blog::create([
            'title' => $request->title,
            'user_id' => auth()->user()->id,
            'date' => $request->date,
            'tags' => $request->tags,
            'story' => $request->story,
            'filename' => $filename,
            'filepath' => '/storage/'.$imagepath,
        ]);

        return back()->with('success', 'Successfully added event');
    }

    /*
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        $blogs = Blog::take(3)->get();
        $tags = Str::of($blog->tags)->explode(', ');



//        return[
//            'id' => $id,
//            'blog' => $blog,
//            'blogs' => $blogs,
//            'tags' => $tags,
//        ];

        return view('blogsingle', ['blog' => $blog, 'blogs' => $blogs, 'tags' => $tags]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /*
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);

        if (File::exists($blog->filepath)){
            File::delete($blog->filepath);
        }

        $blog->delete();

        return back()->with('success', 'Successfully deleted sermon');
    }
}
