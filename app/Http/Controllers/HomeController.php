<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use FFMpeg\FFMpeg;

use App\Models\Video;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware(['auth', 'verified']);
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home.index')->with([
            'active' => 'Home',
            'videos' => Video::all()
        ]);
    }

    public function watch()
    {
        // return $play = Video::where('directory', request()->v.'.mp4')->first();
        if(request()->n){
            $now = Video::where('directory', request()->n)->first();
            $next = Video::where('directory', request()->n)->first()->id;
            $next = Video::where('id','>', $next)->first();
            if(!$next){
                $next = Video::where('id','>', 0)->first();
                // return redirect('/');
            }
            $forplaying = pathinfo($next->directory, PATHINFO_FILENAME);

            return redirect('watch?v='.$forplaying);
            // $playingNow = $forplaying;
        }else{
            $playingNow = request()->v;
        }

        return view('video-page.index')->with([
            'active' => 'Video Page',
            'play' => Video::where('directory',$playingNow.'.mp4')->first(),
            'videos' => Video::where('directory', '!=' ,request()->v.'.mp4')->get()
        ]);
    }
}
