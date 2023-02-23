<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index(){
        $data['galleries'] = Gallery::all();
        return view('admin.gallery.index')->with($data);
    }

    public function store(Request $request){
        $request->validate([
            'img'=>'required|image|max:2048',
            'name_ar'=>'required|string|max:255',
            'name_en'=>'required|string|max:255',
        ]);
        $path = Storage::putFile("gallery",$request->file('img'));

        Gallery::create([
            'img'=>$path ,
            'name'=>json_encode([
                'en'=>$request->name_en,
                'ar'=>$request->name_ar,
            ]),
        ]);
        $request->session()->flash('success','Image Added Successfully');
        return back();
    }

    public function update(Request $request){
        $request->validate([
            'id'=> 'required|exists:blogs,id',
            'img'=>'image|max:2048',
            'name_ar'=>'required|string|max:255',
            'name_en'=>'required|string|max:255',
        ]);
        $gallery = Gallery::findOrFail($request->id);
        $path = $gallery->img;
        if($request->hasFile('img')){
            Storage::delete($path);
            $path = Storage::putFile("gallery",$request->file('img'));
        }
        $gallery->update([
            'img'=>$path ,
            'name'=>json_encode([
                'en'=>$request->name_en,
                'ar'=>$request->name_ar,
            ]),
        ]);
        $request->session()->flash('success','Gallery Updated Successfully');

        return back();
    }

    public function delete($id,Request $request){
        $gallery = Gallery::findOrFail($id);
        $path = $gallery->img;
        Storage::delete($path);
        $gallery->delete();
        $request->session()->flash('success','Blog Deleted Successfully');
        return back();
    }
}
