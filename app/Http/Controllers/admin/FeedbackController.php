<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\ClientFeedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FeedbackController extends Controller
{
    public function index(){
        $data['feedbacks'] = ClientFeedback::all();
        return view('admin.feedback.index')->with($data);
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required|string|max:255',
            'job'=>'required|string|max:255',
            'feedback_ar'=>'required|string',
            'feedback_en'=>'required|string',
        ]);

        ClientFeedback::create([
            'name'=> $request->name,
            'job'=> $request->job,
            'feedback'=>json_encode([
                'en'=>$request->feedback_en,
                'ar'=>$request->feedback_ar,
            ]),
        ]);
        $request->session()->flash('success','Feedback Added Successfully');
        return back();
    }

    public function update(Request $request){
        $request->validate([
            'id'=> 'required|exists:blogs,id',
            'name'=>'required|string|max:255',
            'job'=>'required|string|max:255',
            'feedback_ar'=>'required|string',
            'feedback_en'=>'required|string',
        ]);
        $feedback = ClientFeedback::findOrFail($request->id);
        $feedback->update([
            'name'=> $request->name,
            'job'=> $request->job,
            'feedback'=>json_encode([
                'en'=>$request->feedback_en,
                'ar'=>$request->feedback_ar,
            ]),
        ]);
        $request->session()->flash('success','Feedback Updated Successfully');
        return back();
    }

    public function delete($id,Request $request){
        $feedback = ClientFeedback::findOrFail($id);
        $feedback->delete();
        $request->session()->flash('success','Feedback Deleted Successfully');
        return back();
    }
}
