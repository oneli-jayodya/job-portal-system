<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\jobpost;

class PostJobController extends Controller
{
    public function index()
    {
        return view('company.postedjob');
    }
   
}
