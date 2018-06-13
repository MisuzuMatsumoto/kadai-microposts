<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class makefavoriteController extends Controller
{
     public function store(Request $request, $id)
    {
        \Auth::user()->makefavorite($id);
        return redirect()->back();
    }

    public function destroy($id)
    {
        \Auth::user()->unmakefavorite($id);
        return redirect()->back();
    }
   
}
