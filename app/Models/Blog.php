<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['img','name','description'];
    public function name(){
        $lang = App::getLocale();
        return json_decode($this->name)->$lang;
    }
    public function description(){
        $lang = App::getLocale();
        return json_decode($this->description)->$lang;
    }
}
