<?php

namespace App\Http\Controllers;

use App\Models\Sermon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SermonController extends Controller
{
    /*
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sermons', ['sermons' => Sermon::all()]);
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
            'speaker' => 'required',
            'date' => 'required',
            'youtubeLink' => 'required',
        ]);

        Sermon::create([
            'title' => $request->title,
            'speaker' => $request->speaker,
            'date' => $request->date,
            'youtubeLink' => $request->youtubeLink,
        ]);

        return back()->with('success', 'Successfully added sermon');
    }


    public function show($id)
    {
        $sermon = Sermon::find($id);
        return view('sermon', ['sermon' => $sermon]);
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
        $sermon = Sermon::find($id);

        $sermon->delete();

        return back()->with('success', 'Successfully deleted sermon');
    }
}
