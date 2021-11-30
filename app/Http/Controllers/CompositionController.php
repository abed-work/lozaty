<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Composition;


class CompositionController extends Controller
{
    public function store(Request $request,$id){
        $composition = Composition::findOrFail($id);

        $composition->description = $request->description;

        $composition->save();

        return redirect()
                ->route('dashboard.discover-lozaty.index')
                ->with('success','Info has been saved!');;
    }
}
