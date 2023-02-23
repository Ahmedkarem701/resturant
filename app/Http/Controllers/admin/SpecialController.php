<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\WeekSpecial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SpecialController extends Controller
{
    public function index(){
        $data['specials'] = WeekSpecial::all();
        return view('admin.special.index')->with($data);
    }

    public function store(Request $request){
        $request->validate([
            'img'=>'required|image|max:2048',
            'discount'=>'required|max:2048',
            'condition_ar'=>'required|string|max:255',
            'condition_en'=>'required|string|max:255',
            'offer_ar'=>'required|string',
            'offer_en'=>'required|string',
        ]);
        $path = Storage::putFile("special",$request->file('img'));

        WeekSpecial::create([
            'img'=>$path,
            'discount'=>$request->discount,
            'condition'=>json_encode([
                'en'=>$request->condition_en,
                'ar'=>$request->condition_ar,
            ]),
            'offer'=>json_encode([
                'en'=>$request->offer_en,
                'ar'=>$request->offer_ar,
            ]),
        ]);
        $request->session()->flash('success','WeekSpecial Added Successfully');
        return back();
    }

    public function update(Request $request){
        $request->validate([
            'id'=> 'required|exists:blogs,id',
            'img'=>'image|max:2048',
            'discount'=>'required|max:2048',
            'condition_ar'=>'required|string|max:255',
            'condition_en'=>'required|string|max:255',
            'offer_ar'=>'required|string',
            'offer_en'=>'required|string',
        ]);
        $special = WeekSpecial::findOrFail($request->id);
        $path = $special->img;
        if($request->hasFile('img')){
            Storage::delete($path);
            $path = Storage::putFile("special",$request->file('img'));
        }
        $special->update([
            'img'=>$path,
            'discount'=>$request->discount,
            'condition'=>json_encode([
                'en'=>$request->condition_en,
                'ar'=>$request->condition_ar,
            ]),
            'offer'=>json_encode([
                'en'=>$request->offer_en,
                'ar'=>$request->offer_ar,
            ]),
        ]);
        $request->session()->flash('success','Week Special Updated Successfully');

        return back();
    }

    public function delete($id,Request $request){
        $special = WeekSpecial::findOrFail($id);
        $path = $special->img;
        Storage::delete($path);
        $special->delete();
        $request->session()->flash('success','Week Specials Deleted Successfully');
        return back();
    }
}
