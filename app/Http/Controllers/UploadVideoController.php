<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\TempVideo;
use App\Models\Video;
use App\Models\User;

class UploadVideoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tempVid = TempVideo::all()->first();
        return view('upload-video.index')->with([
            'active' => 'Upload Video',
            'tempVid' => $tempVid
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tempVid = TempVideo::all()->first();

        if($tempVid){
            return view('upload-video.index')->with([
                'active' => 'Upload Video',
                'tempVid' => $tempVid
            ]);
        }
        return view('upload-video.upload')->with([
            'active' => 'Upload Video'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $temp = TempVideo::where('user_id', request()->user()->id)->first();
        // return dd($request->all());
        $user_id = request()->user()->id;
        $title =  pathinfo($request->file('video')->getClientOriginalName(), PATHINFO_FILENAME);
        $title = pathinfo($title, PATHINFO_FILENAME);

        if($request->file('video'))
        {
            $request->file('video')->storePubliclyAs('temp-video', $request->file('video')->hashName());
            $directory = $request->file('video')->hashName();
        }

        if($temp){
            Storage::delete('temp-video/'.$temp->directory);
            TempVideo::where('user_id', request()->user()->id)->delete();
        }
        
        TempVideo::create([
            'user_id' => $user_id,
            'title' => $title,
            'directory' => $directory
        ]);
        
    }

    public function upload(Request $request)
    {
        // return $request->all();

        $title = $request->title;
        $description = $request->description;
        $category = $request->category;
        $privacy = $request->privacy;
        $directory = $request->directory;


        if($request->file('thumbnail'))
        {
            $request->file('thumbnail')->storePubliclyAs('thumbnail', $request->file('thumbnail')->hashName());
            $thumbnail = $request->file('thumbnail')->hashName();
        }

        Storage::move('temp-video/'.$directory, 'video/'.$directory);
        Video::create([
            'title' => $title,
            'thumbnail' => $thumbnail,
            'description' => $description,
            'category' => $category,
            'privacy' => $privacy,
            'directory' => $directory
        ]);

        TempVideo::where('user_id', request()->user()->id)->delete();

        return view('upload-video.upload')->with([
            'active' => 'Upload Video',
        ]);

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
