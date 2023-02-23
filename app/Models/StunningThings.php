<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class StunningThings extends Model
{
    use HasFactory;
    protected $fillable = ['icon','name','description'];

    public function name(){
        $lang = App::getLocale();
        return json_decode($this->name)->$lang;
    }
    public function description(){
        $lang = App::getLocale();
        return json_decode($this->description)->$lang;
    }
}
