<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class WeekSpecial extends Model
{
    use HasFactory;
    protected $fillable = ['img','discount','condition','offer'];
    public function condition(){
        $lang = App::getLocale();
        return json_decode($this->condition)->$lang;
    }
    public function offer(){
        $lang = App::getLocale();
        return json_decode($this->offer)->$lang;
    }
}
