<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{

    public function index()
    {
        return view('admin.video.index',[
            'videos'    => Video::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.video.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'video_title_en'=>'required',
            'video_id'=>'required',
            'video_image'=>'required|image'
        ]);

        $filenameToStore=NULL;  
        if($request->hasFile('video_image')){
            $image=$request->video_image;
            $filename = $image->getClientOriginalName();
            $imageBaseName = pathinfo($filename,PATHINFO_FILENAME);
            $imageExtension = pathinfo($filename,PATHINFO_EXTENSION);
            $filenameToStore = $imageBaseName . '-' . time() . '.' . $imageExtension;
            $path = $image->storeAs('public/images/' , $filenameToStore);
        }

        Video::create([
            'title_en'          =>  $request->video_title_en,
            'title_ar'          =>  $request->video_title_ar,
            'featured_image'    =>  $filenameToStore,
            'link'              =>  $request->video_id,
            'isFeatured'        => ($request->is_featured ? 1:0)
        ]);

        return redirect()->route('dashboard.videos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $video = Video::findOrFail($id);
        return view('admin.video.show',[
            'video' => $video
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $video = Video::findOrFail($id);
        return view('admin.video.edit',[
            'video'=>$video
        ]);
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
        $video = Video::findOrFail($id);

        $this->validate($request,[
            'video_title_en'=>'required',
            'video_link'=>'required'
        ]);

        $filenameToStore=NULL;  
        if($request->hasFile('video_image')){
            $image=$request->video_image;
            $filename = $image->getClientOriginalName();
            $imageBaseName = pathinfo($filename,PATHINFO_FILENAME);
            $imageExtension = pathinfo($filename,PATHINFO_EXTENSION);
            $filenameToStore = $imageBaseName . '-' . time() . '.' . $imageExtension;
            $path = $image->storeAs('public/images/' , $filenameToStore);

            // delete the old image

            if (file_exists(storage_path().'/app/public/images/'.$video->featured_image))
                unlink(storage_path().'/app/public/images/'.$video->featured_image);
        }

        $video->title_en = $request->video_title_en;
        $video->title_ar = $request->video_title_ar;
        $video->featured_image = ($filenameToStore == NULL ? $video->featured_image:$filenameToStore);
        $video->link = $request->video_link;
        $video->isFeatured = ($request->is_featured ? 1:0);

        $video->save();

        return redirect()->route('dashboard.videos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $video = Video::findOrFail($id);

        if (file_exists(storage_path().'/app/public/images/'.$video->featured_image)){
            unlink(storage_path().'/app/public/images/'.$video->featured_image);
        }

        $video->delete();

        return redirect()->route('dashboard.videos.index');
    }
}
