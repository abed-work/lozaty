<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Composition;


class CompositionController extends Controller
{
    public function store(Request $request,$id){
        $composition = Composition::findOrFail($id);

        $composition->description_en = $request->description_en;
        $composition->description_ar = $request->description_ar;

        $composition->save();

        return redirect()
                ->route('dashboard.discover-lozaty.index')
                ->with('success','Info has been saved!');;
    }
}
