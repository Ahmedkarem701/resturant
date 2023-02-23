<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    public function index(){
        $data['partners'] = Partner::all();
        return view('admin.partner.index')->with($data);
    }

    public function store(Request $request){
        $request->validate([
            'img'=>'required|image|max:2048',
            'link'=>'required|url',
        ]);
        $path = Storage::putFile("partner",$request->file('img'));

        Partner::create([
            'img'=>$path ,
            'link'=>$request->link,
        ]);
        $request->session()->flash('success','Image Added Successfully');
        return back();
    }

    public function update(Request $request){
        $request->validate([
            'id'=> 'required|exists:blogs,id',
            'img'=>'image|max:2048',
            'link'=>'required|url',
        ]);
        $partner = Partner::findOrFail($request->id);
        $path = $partner->img;
        if($request->hasFile('img')){
            Storage::delete($path);
            $path = Storage::putFile("partner",$request->file('img'));
        }
        $partner->update([
            'img'=>$path ,
            'link'=>$request->link,
        ]);
        $request->session()->flash('success','Image Updated Successfully');

        return back();
    }

    public function delete($id,Request $request){
        $partner = Partner::findOrFail($id);
        $path = $partner->img;
        Storage::delete($path);
        $partner->delete();
        $request->session()->flash('success','Image Deleted Successfully');
        return back();
    }
}
