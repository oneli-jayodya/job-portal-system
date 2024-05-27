<?php

namespace App\Http\Controllers\StudentPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApplyJobController extends Controller
{
    public function applyjob()
    {
        return view('applyjob');
    }
}
