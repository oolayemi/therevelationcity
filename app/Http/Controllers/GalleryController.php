<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
//        $request->validate([
//            'files' => 'required|mimes:png,jpg,jpeg,gif',
//        ]);

        if ($request->hasfile('files')) {
            $images = $request->file('files');

            foreach($images as $image) {

                $filename = str_replace(' ', '-', $image->getClientOriginalName());

                if (File::exists(public_path().'/gallery/'.$filename)){
                    $filename = time() . '_' . str_replace(' ', '-', $image->getClientOriginalName());
                }

                //$imagepath = $request->file('file')->storeAs('gallery', $filename, 'public');

                $path = $image->storeAs('gallery', $filename, 'public');

                Gallery::create([
                    'imagename' => $filename,
                    'imagepath' => '/storage/'.$path
                ]);
            }
        }

        return back()->with('success', 'Images uploaded successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
