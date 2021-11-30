<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Flavor;

class FlavorController extends Controller
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
        return view('admin.discover-lozaty.flavor.create');
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
            'title'         => 'required',
            'main_image'    => 'required|image|',
            'pop_image'     => 'required|image|'
        ]);

        $main_image=null;
        $pop_image=null;

        /* Main Image */
        $image=$request->main_image;
        $filename = $image->getClientOriginalName();
        $imageBaseName = pathinfo($filename,PATHINFO_FILENAME);
        $imageExtension = pathinfo($filename,PATHINFO_EXTENSION);
        $main_image = $imageBaseName . '-' . time() . '.' . $imageExtension;
        $path = $image->storeAs('public/images/' , $main_image);

        /* Pop Image */
        $image=$request->pop_image;
        $filename = $image->getClientOriginalName();
        $imageBaseName = pathinfo($filename,PATHINFO_FILENAME);
        $imageExtension = pathinfo($filename,PATHINFO_EXTENSION);
        $pop_image = $imageBaseName . '-' . time() . '.' . $imageExtension;
        $path = $image->storeAs('public/images/' , $pop_image);
        
        
        Flavor::create([
            'title'         => $request->title,
            'main_image'    => $pop_image,
            'pop_image'     => $main_image
        ]);

        return redirect()->route('dashboard.discover-lozaty.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $flavor = Flavor::findOrFail($id);

        return view('admin.discover-lozaty.flavor.show',[
            'flavor'    => $flavor
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
        $flavor = Flavor::findOrFail($id);

        return view('admin.discover-lozaty.flavor.edit',[
            'flavor'    => $flavor
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
        $flavor = Flavor::findOrFail($id);

        $this->validate($request,[
            'title' => 'required'
        ]);

        if ($request->hasFile('main_image')){
            // delete the old one
            if (file_exists(storage_path().'/app/public/images/'.$flavor->main_image)){
                unlink(storage_path().'/app/public/images/'.$flavor->main_image);
            }

            $image=$request->main_image;
            $filename = $image->getClientOriginalName();
            $imageBaseName = pathinfo($filename,PATHINFO_FILENAME);
            $imageExtension = pathinfo($filename,PATHINFO_EXTENSION);
            $main_image = $imageBaseName . '-' . time() . '.' . $imageExtension;
            $path = $image->storeAs('public/images/' , $main_image);

            $flavor->main_image = $main_image;

        }
        
        if ($request->hasFile('pop_image')){
            // delete the old one
            if (file_exists(storage_path().'/app/public/images/'.$flavor->pop_image)){
                unlink(storage_path().'/app/public/images/'.$flavor->pop_image);
            }

            $image=$request->pop_image;
            $filename = $image->getClientOriginalName();
            $imageBaseName = pathinfo($filename,PATHINFO_FILENAME);
            $imageExtension = pathinfo($filename,PATHINFO_EXTENSION);
            $pop_image = $imageBaseName . '-' . time() . '.' . $imageExtension;
            $path = $image->storeAs('public/images/' , $pop_image);

            $flavor->pop_image = $pop_image;

        }
        
        $flavor->title = $request->title;
        
        $flavor->save();

        return redirect()->route('dashboard.discover-lozaty.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flavor = Flavor::findOrFail($id);

        if (file_exists(storage_path().'/app/public/images/'.$flavor->pop_image)){
            unlink(storage_path().'/app/public/images/'.$flavor->pop_image);
        }
        if (file_exists(storage_path().'/app/public/images/'.$flavor->main_image)){
            unlink(storage_path().'/app/public/images/'.$flavor->main_image);
        }

        $flavor->delete();

        return redirect()->route('dashboard.discover-lozaty.index');

    }
}
