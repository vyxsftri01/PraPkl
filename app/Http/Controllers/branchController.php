<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\branch;


class branchController extends Controller
{
    public function index2()
    {
     $branch = branch::all();
     return view('post.index2', compact('branch'));
    }  
}
