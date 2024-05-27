<?php

namespace App\Http\Controllers\CompanyPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        return view('company.dashboard');
    }
}
