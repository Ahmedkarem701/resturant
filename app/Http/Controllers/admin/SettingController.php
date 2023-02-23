<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function index(){
        $data['setting'] = Setting::findOrFail(1);
        return view('admin.setting.index')->with($data);
    }

    public function update(Request $request){
        $request->validate([
            'logo'=>'image|max:2048',
            'name'=>'required|string|max:255',
            'phone'=>'required|string',
            'email'=>'required|string',
            'address'=>'required|string',
            'keywords'=>'required|string',
            'description'=>'required|string',
            'facebook'=>'required|string',
            'instagram'=>'required|string',
            'linkedin'=>'required|string',
            'twitter'=>'required|string',
        ]);
        $setting = Setting::findOrFail(1);
        $path = $setting->logo;
        if($request->hasFile('logo')){
            Storage::delete($path);
            $path = Storage::putFile("setting",$request->file('logo'));
        }
        $setting->update([
            'logo'=>$path,
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'address'=>$request->address,
            'keywords'=>$request->keywords,
            'description'=>$request->description,
            'facebook'=>$request->facebook,
            'instagram'=>$request->instagram,
            'linkedin'=>$request->linkedin,
            'twitter'=>$request->twitter,
        ]);
        $request->session()->flash('success','Setting Updated Successfully');

        return back();
    }
}
