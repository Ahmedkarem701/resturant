<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    public function booking(Request $request){
        $validator = Validator::make($request->all(),[
            'name'=> 'required|string|max:255',
            'email'=>'required|email|max:255',
            'phone'=>'required|max:255',
            'date'=>'required|max:255',
            'time'=>'required|max:255',
            'number'=>'required|max:255',
        ]);
        if($validator->fails()){
            $errors = $validator->errors();
            return redirect(url('/'))->withErrors($errors);
        }

        Booking::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'date'=>$request->date,
            'time'=>$request->time,
            'number'=>$request->number,
        ]);
        $request->session()->flash('success','Message sent Successfuly');
        return back();
    }
}
