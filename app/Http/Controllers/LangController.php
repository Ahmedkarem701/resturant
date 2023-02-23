<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LangController extends Controller
{
    public function set($lang,Request $request){
        $usedLang = ['en','ar'];
        if(! in_array($lang, $usedLang)){
            $lang = 'en';
        }
        $request->session()->put('lang', $lang);

        return back();
    }
}
