<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trainer;

class TrainerController extends Controller
{
    public function trainer(){
        $trainer = Trainer::paginate(5);
        return view('backend.trainer.index',compact('trainer'))->with('i',(request()->input('page',1)-1)*5);
    }


    public function create(){
        return view('backend.trainer.create');
    }

    public function store(){
        Trainer::create($request->all());
        return redirect()->route('trainer.store')->with('Note','Add done');
    }
}
