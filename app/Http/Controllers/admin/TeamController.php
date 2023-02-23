<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    public function index(){
        $data['teams'] = Team::all();
        return view('admin.team.index')->with($data);
    }

    public function store(Request $request){
        $request->validate([
            'img'=>'required|image|max:2048',
            'name_ar'=>'required|string|max:255',
            'name_en'=>'required|string|max:255',
            'job_ar'=>'required|string',
            'job_en'=>'required|string',
        ]);
        $path = Storage::putFile("team",$request->file('img'));

        Team::create([
            'img'=>$path ,
            'name'=>json_encode([
                'en'=>$request->name_en,
                'ar'=>$request->name_ar,
            ]),
            'job'=>json_encode([
                'en'=>$request->job_en,
                'ar'=>$request->job_ar,
            ]),
        ]);
        $request->session()->flash('success','Team Added Successfully');
        return back();
    }

    public function update(Request $request){
        $request->validate([
            'id'=> 'required|exists:blogs,id',
            'img'=>'image|max:2048',
            'name_ar'=>'required|string|max:255',
            'name_en'=>'required|string|max:255',
            'job_ar'=>'required|string',
            'job_en'=>'required|string',
        ]);
        $team = Team::findOrFail($request->id);
        $path = $team->img;
        if($request->hasFile('img')){
            Storage::delete($path);
            $path = Storage::putFile("team",$request->file('img'));
        }
        $team->update([
            'img'=>$path ,
            'name'=>json_encode([
                'en'=>$request->name_en,
                'ar'=>$request->name_ar,
            ]),
            'job'=>json_encode([
                'en'=>$request->job_en,
                'ar'=>$request->job_ar,
            ]),
        ]);
        $request->session()->flash('success','Team Updated Successfully');

        return back();
    }

    public function delete($id,Request $request){
        $team = Team::findOrFail($id);
        $path = $team->img;
        Storage::delete($path);
        $team->delete();
        $request->session()->flash('success','Team Deleted Successfully');
        return back();
    }
}
