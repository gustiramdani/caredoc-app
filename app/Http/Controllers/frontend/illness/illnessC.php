<?php

namespace App\Http\Controllers\frontend\illness;

use App\Http\Controllers\Controller;
use App\Models\Illness;
use Illuminate\Http\Request;

class illnessC extends Controller
{
    public function index(Request $request){
        $illnesses = Illness::paginate(20);
        return view('frontend.illness.index',compact('illnesses'));
    }

    public function detail($id){
        $illness = Illness::find($id);
        return view('frontend.illness.detail',compact('illness'));
    }

}
