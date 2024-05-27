<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Apply;
use Illuminate\Http\Request;

class ApplyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobapply');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ajob = Apply::make($request->all(), [
            'name'=>['required'],
            'email'=>['required','email'],
            'gender'=>['required'],
            'birthday'=>['required'],
            'nic'=>['required'],
            'describe'=>['required'],
            'job_title'=>['required'],
            'company'=>['required'],
            
        ]);
        
        $user = Auth::user();

        $ajob=Apply::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'gender'=>$request->gender,
            'birthday'=>$request->birthday,
            'nic'=>$request->nic,
            'describe'=>$request->describe,
            'job_title'=>$request->job_title,
            'company'=>$request->company,
            'user_id'=>$user->id

        ]);

        $ajob->save();
        
        return redirect()->route('jobapply')->with('success','Appiled for job Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Apply $apply)
    {

        if(Auth::check()){
            $user = Auth::user();
        
            $jobs = $user->jobs;
        
            $newjobs = $user->jobs->where('name','==', $user->name)->all();

            return view('applyjob', compact('jobs','newjobs','user'));
        }
    }

    public function destroy($id)
    {
        $job = Apply::destroy($id);
        
    
    
        return back();
    }
}
