<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Overview;

class OverviewController extends Controller
{
    //

    public function store(Request $request,$id){
        $overview = Overview::findOrFail($id);

        $overview->description = $request->description;

        $overview->save();

        return redirect()
                ->route('dashboard.discover-lozaty.index')
                ->with('success','Info has been saved!');;
    }
}
