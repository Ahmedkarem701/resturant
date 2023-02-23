<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\MenuCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function index(){
        $data['menus'] = Menu::all();
        $data['cats'] = MenuCategory::all();
        return view('admin.menu.menu')->with($data);
    }

    public function store(Request $request){
        $request->validate([
            'img'=>'required|image|max:2048',
            'cat_id'=>'required',
            'price'=>'required|max:255|numeric',
            'name_ar'=>'required|string|max:255',
            'name_en'=>'required|string|max:255',
            'ingredients_ar'=>'required|string',
            'ingredients_en'=>'required|string',
        ]);
        $path = Storage::putFile("menu",$request->file('img'));

        Menu::create([
            'img'=>$path ,
            'menu_category_id'=>$request->cat_id,
            'price'=>$request->price,
            'name'=>json_encode([
                'en'=>$request->name_en,
                'ar'=>$request->name_ar,
            ]),
            'ingredients'=>json_encode([
                'en'=>$request->ingredients_en,
                'ar'=>$request->ingredients_ar,
            ]),
        ]);
        $request->session()->flash('success','Food Added Successfully');
        return back();
    }


    public function update(Request $request){
        $request->validate([
            'id'=> 'required|exists:blogs,id',
            'img'=>'image|max:2048',
            'cat_id'=>'required',
            'price'=>'required|max:255|numeric',
            'name_ar'=>'required|string|max:255',
            'name_en'=>'required|string|max:255',
            'ingredients_ar'=>'required|string',
            'ingredients_en'=>'required|string',
        ]);
        $menu = Menu::findOrFail($request->id);
        $path = $menu->img;
        if($request->hasFile('img')){
            Storage::delete($path);
            $path = Storage::putFile("menu",$request->file('img'));
        }
        $menu->update([
            'img'=>$path,
            'menu_category_id'=>$request->cat_id,
            'price'=>$request->price,
            'name'=>json_encode([
                'en'=>$request->name_en,
                'ar'=>$request->name_ar,
            ]),
            'ingredients'=>json_encode([
                'en'=>$request->ingredients_en,
                'ar'=>$request->ingredients_ar,
            ]),
        ]);
        $request->session()->flash('success','Food Updated Successfully');

        return back();
    }

    public function delete($id,Request $request){
        $menu = Menu::findOrFail($id);
        $path = $menu->img;
        Storage::delete($path);
        $menu->delete();
        $request->session()->flash('success','Food Deleted Successfully');
        return back();
    }

}
