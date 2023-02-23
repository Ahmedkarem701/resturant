<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\StunningThings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StunningController extends Controller
{
    public function index(){
        $data['stunnings'] = StunningThings::all();
        return view('admin.stunning.index')->with($data);
    }

    public function store(Request $request){
        $request->validate([
            'icon'=>'required|image|max:2048',
            'name_ar'=>'required|string|max:255',
            'name_en'=>'required|string|max:255',
            'description_ar'=>'required|string',
            'description_en'=>'required|string',
        ]);
        $path = Storage::putFile("stunning",$request->file('icon'));
        StunningThings::create([
            'icon'=>$path ,
            'name'=>json_encode([
                'en'=>$request->name_en,
                'ar'=>$request->name_ar,
            ]),
            'description'=>json_encode([
                'en'=>$request->description_en,
                'ar'=>$request->description_ar,
            ]),
        ]);
        $request->session()->flash('success','Stunning Things Added Successfully');
        return back();
    }

    public function update(Request $request){
        $request->validate([
            'id'=> 'required|exists:blogs,id',
            'icon'=>'image|max:2048',
            'name_ar'=>'required|string|max:255',
            'name_en'=>'required|string|max:255',
            'description_ar'=>'required|string',
            'description_en'=>'required|string',
        ]);
        $stunning = StunningThings::findOrFail($request->id);
        $path = $stunning->icon;
        if($request->hasFile('icon')){
            Storage::delete($path);
            $path = Storage::putFile("stunning",$request->file('icon'));
        }
        $stunning->update([
            'icon'=>$path ,
            'name'=>json_encode([
                'en'=>$request->name_en,
                'ar'=>$request->name_ar,
            ]),
            'description'=>json_encode([
                'en'=>$request->description_en,
                'ar'=>$request->description_ar,
            ]),
        ]);
        $request->session()->flash('success','Stunning Things Updated Successfully');

        return back();
    }

    public function delete($id,Request $request){
        $stunning = StunningThings::findOrFail($id);
        $path = $stunning->icon;
        Storage::delete($path);
        $stunning->delete();
        $request->session()->flash('success','Stunning Things Deleted Successfully');
        return back();
    }
}
