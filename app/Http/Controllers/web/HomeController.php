<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Booking;
use App\Models\ClientFeedback;
use App\Models\Gallery;
use App\Models\Instagram;
use App\Models\MenuCategory;
use App\Models\Partner;
use App\Models\Setting;
use App\Models\StunningThings;
use App\Models\Team;
use App\Models\WeekSpecial;

class HomeController extends Controller
{
    public function index(){
        $data['setting'] = Setting::findOrFail(1);
        $data['partners'] = Partner::all();
        $data['blogs'] = Blog::all();
        $data['client_feedbacks'] = ClientFeedback::all();
        $data['galleries'] = Gallery::all();
        $data['teams'] = Team::all();
        $data['stunnings'] = StunningThings::all();
        $data['week_specials'] = WeekSpecial::all();
        $data['categories'] = MenuCategory::all();
        $data['instagrams'] = Instagram::all();
        return view('web.home')->with($data);
    }
}
