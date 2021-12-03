<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GlobalPresence;

class GlobalPresenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        return view('admin.global-presence.index',[
            'countries' => GlobalPresence::select('country_code')->get()
        ]);
    }

    public function getActiveCountries(){
        return GlobalPresence::select('country_code')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        GlobalPresence::whereNotNull('id')->delete();

        if ($request->countries){
            foreach ($request->countries as $country) {
                GlobalPresence::create([
                    'country_code'  => $country
                ]);
            }
        }
        return redirect()->route('dashboard.global-presence.index');
    }
}
