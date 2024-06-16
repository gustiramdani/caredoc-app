<?php

namespace App\Http\Controllers\Illness;

use App\Http\Controllers\Controller;
use App\Models\EmptyIllness;
use Illuminate\Http\Request;

class EmptyIllnessC extends Controller
{
    public function index(Request $request){
        $emptyIllnesses = EmptyIllness::get();
        return view('backend.empty-illness.index', compact('emptyIllnesses'));
    }

    public function delete($id){
        $illness = EmptyIllness::findOrFail($id);
        $illness->delete();

        return redirect()->route("backend.empty-illness.index")->with('success', 'Data deleted successfully!');

    }
}
