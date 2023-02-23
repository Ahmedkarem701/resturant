<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        $data['contacts'] = Contact::all();
        return view("admin.contact.index")->with($data);
    }
}
