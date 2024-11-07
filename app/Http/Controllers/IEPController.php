<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IEP;

class IEPController extends Controller
{
    public function index(){
        $ieps = IEP::all();
        return view("ieps.index",compact("ieps"));
    }
    public function store(Request $request){
        $iep = new IEP();
        $iep->student_name = $request->student_name;
        $iep->goals = $request->goals;
        $iep->save();
        return redirect('/ieps');
    }
    //
}
