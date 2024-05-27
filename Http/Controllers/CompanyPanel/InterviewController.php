<?php

namespace App\Http\Controllers\CompanyPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InterviewController extends Controller
{
    public function index()
    {
        return view('company.interview');
    }
}
