<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TraineeController extends Controller
{
    public function trainee(){
        return view('backend.trainee.index');
    }
    public function profile(){
        return view('backend.trainee.profile');
    }
}
