<?php

namespace App\Http\Controllers\CompanyPanel;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\jobpost;
use App\Models\categories;
use DB;

class JobPostController extends Controller
{
    public function create()
    {
        return view('company.post');
    }
    public function store(Request $request)
    {
        $cpost = jobpost::make($request->all(), [
            'title'=>['required'],
            'category'=>['required'],
            'job_type'=>['required'],
            'company'=>['required'],
            'city'=>['required','string'],
            'description'=>['required'],
            'deadline'=>['required'],
        ]);

        
        $categoryName = \App\Models\categories::find($request->category)->category_name;

        $user = Auth::user();

        $cpost=jobpost::create([
            'title'=>$request->title,
            'category' => $categoryName,
            'job_type'=>$request->job_type,
            'company'=>$request->company,
            'city'=>$request->city,
            'description'=>$request->description,
            'deadline'=>$request->deadline,
            'user_id'=>$user->id

        ]);


        $cpost->save();

        
        return redirect()->route('company.post')->with('success','Post Successfully');
    }
       
    public function show(Request $request)
    {

        if($request->has(['data'])){
            $search = $request->input('data');

            if($search == ""){
                $job = jobpost::all();
            }

            $jobsByCategory = jobpost::where('category','like', "%{$search}%")->get();
            $jobsByCity = jobpost::where('city','like', "%{$search}%")->get();

            $job = $jobsByCategory->merge($jobsByCity);
            
        }else{
            $job = jobpost::all();
        }

        return view('search',compact('job'));
        
    }

    public function check(jobpost $post)
    {

        // if(Auth::check()){
        //     $user = Auth::user();
        
        //     $post = $user->comjob;
        
        //     $newjobs = $user->comjob->where('company','==', $user->name)->all();

        //     return view('company.postedjob', compact('post','newjobs','user'));
        // }

        $post = jobpost::all();
        return view('company.postedjob',compact('post'));
    }
   
    public function destroy($id)
    {
       jobpost::destroy($id);
        
    
    
        return back();
    }

}
