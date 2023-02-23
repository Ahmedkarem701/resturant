<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index(){
        $data['blogs'] = Blog::all();
        return view('admin.blog.index')->with($data);
    }

    public function store(Request $request){
        $request->validate([
            'img'=>'required|image|max:2048',
            'name_ar'=>'required|string|max:255',
            'name_en'=>'required|string|max:255',
            'description_ar'=>'required|string',
            'description_en'=>'required|string',
        ]);
        $path = Storage::putFile("blog",$request->file('img'));

        Blog::create([
            'img'=>$path ,
            'name'=>json_encode([
                'en'=>$request->name_en,
                'ar'=>$request->name_ar,
            ]),
            'description'=>json_encode([
                'en'=>$request->description_en,
                'ar'=>$request->description_ar,
            ]),
        ]);
        $request->session()->flash('success','Blog Added Successfully');
        return back();
    }

    public function update(Request $request){
        $request->validate([
            'id'=> 'required|exists:blogs,id',
            'img'=>'image|max:2048',
            'name_ar'=>'required|string|max:255',
            'name_en'=>'required|string|max:255',
            'description_ar'=>'required|string',
            'description_en'=>'required|string',
        ]);
        $blog = Blog::findOrFail($request->id);
        $path = $blog->img;
        if($request->hasFile('img')){
            Storage::delete($path);
            $path = Storage::putFile("blog",$request->file('img'));
        }
        $blog->update([
            'img'=>$path ,
            'name'=>json_encode([
                'en'=>$request->name_en,
                'ar'=>$request->name_ar,
            ]),
            'description'=>json_encode([
                'en'=>$request->description_en,
                'ar'=>$request->description_ar,
            ]),
        ]);
        $request->session()->flash('success','Blog Updated Successfully');

        return back();
    }

    public function delete($id,Request $request){
        $blog = Blog::findOrFail($id);
        $path = $blog->img;
        Storage::delete($path);
        $blog->delete();
        $request->session()->flash('success','Blog Deleted Successfully');
        return back();
    }
}
