<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Instagram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InstagramController extends Controller
{
    public function index(){
        $data['instagrams'] = Instagram::all();
        return view('admin.instagram.index')->with($data);
    }

    public function store(Request $request){
        $request->validate([
            'img'=>'required|image|max:2048',
            'link'=>'required|url',
        ]);
        $path = Storage::putFile("instagram",$request->file('img'));

        Instagram::create([
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
        $insta = Instagram::findOrFail($request->id);
        $path = $insta->img;
        if($request->hasFile('img')){
            Storage::delete($path);
            $path = Storage::putFile("instagram",$request->file('img'));
        }
        $insta->update([
            'img'=>$path ,
            'link'=>$request->link,
        ]);
        $request->session()->flash('success','Image Updated Successfully');

        return back();
    }

    public function delete($id,Request $request){
        $insta = Instagram::findOrFail($id);
        $path = $insta->img;
        Storage::delete($path);
        $insta->delete();
        $request->session()->flash('success','Image Deleted Successfully');
        return back();
    }
}
