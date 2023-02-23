<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function contact(Request $request){
        $validator = Validator::make($request->all(),[
            'firstname'=> 'required|string|max:255',
            'lastname'=> 'required|string|max:255',
            'email'=>'required|email|max:255',
            'phone'=>'required|max:255',
            'message'=>'required|string',
        ]);
        if($validator->fails()){
            $errors = $validator->errors();
            return redirect(url('/'))->withErrors($errors);
        }

        Contact::create([
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'message'=>$request->message,
        ]);
        $request->session()->flash('success','Message sent Successfuly');
        return back();
    }
}
