<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\staffbranch;
use App\Models\Staff;
use App\Models\branch;

class staffbranchController extends Controller
{
    public function index2()
   {
    $staffbranch = staffbranch::all();
    $Staff = Staff::all();
    $branch = branch::all();
    return view('post.index2', compact('staffbranch','Staff','branch'));
}  
}
