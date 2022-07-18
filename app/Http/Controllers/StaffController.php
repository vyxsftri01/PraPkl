<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

class StaffController extends Controller
{
    public function index2()
    {
     $Staff = Staff::all();
     return view('post.index2', compact('Staff'));
 }  
}
