<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Sermon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EventController extends Controller
{
    /*
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('events', ['events' => $events ]);
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
            'date' => 'required',
            'starttime' => 'required',
            'endtime' => 'required',
            'location' => 'required',
            'address' => 'required',
            'description' => 'required',
//            'file' => 'required|mimes:mp4,mkv'
        ]);

        $filename = str_replace(' ', '-', $request->file->getClientOriginalName());

        if (File::exists(public_path().'/events/'.$filename)){
            $filename = time() . '_' . str_replace(' ', '-', $request->file->getClientOriginalName());
        }

        $imagepath = $request->file('file')->storeAs('events', $filename, 'public');

        $event = Event::create([
            'title' => $request->title,
            'date' => $request->date,
            'starttime' => $request->starttime,
            'endtime' => $request->endtime,
            'location' => $request->location,
            'address' => $request->address,
            'description' => $request->description,
            'filename' => $filename,
            'imagepath' => 'storage/'.$imagepath,
        ]);



        return back()->with('success', 'Successfully added event');
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

    /*
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);

        if (File::exists($event->imagepath)){
            File::delete($event->imagepath);
        }

        $event->delete();

        return back()->with('success', 'Successfully deleted sermon');
    }
}
