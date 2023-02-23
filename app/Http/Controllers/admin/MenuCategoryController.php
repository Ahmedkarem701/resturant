<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\MenuCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuCategoryController extends Controller
{
    public function index(){
        $data['cats'] = MenuCategory::all();
        return view('admin.menu.cats')->with($data);
    }

    public function store(Request $request){
        $request->validate([
            'icon'=>'required|image|max:2048',
            'name_ar'=>'required|string|max:255',
            'name_en'=>'required|string|max:255',
        ]);
        $path = Storage::putFile("menu",$request->file('icon'));

        MenuCategory::create([
            'icon'=>$path ,
            'name'=>json_encode([
                'en'=>$request->name_en,
                'ar'=>$request->name_ar,
            ]),
        ]);
        $request->session()->flash('success','Category Added Successfully');
        return back();
    }

    public function update(Request $request){
        $request->validate([
            'id'=> 'required|exists:blogs,id',
            'icon'=>'image|max:2048',
            'name_ar'=>'required|string|max:255',
            'name_en'=>'required|string|max:255',
        ]);
        $cat = MenuCategory::findOrFail($request->id);
        $path = $cat->icon;
        if($request->hasFile('icon')){
            Storage::delete($path);
            $path = Storage::putFile("menu",$request->file('icon'));
        }
        $cat->update([
            'icon'=>$path ,
            'name'=>json_encode([
                'en'=>$request->name_en,
                'ar'=>$request->name_ar,
            ]),
        ]);
        $request->session()->flash('success','Category Updated Successfully');

        return back();
    }

    public function delete($id,Request $request){
        $cat = MenuCategory::findOrFail($id);
        $path = $cat->icon;
        Storage::delete($path);
        $cat->delete();
        $request->session()->flash('success','Category Deleted Successfully');
        return back();
    }
}
