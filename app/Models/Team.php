<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Team extends Model
{
    use HasFactory;
    protected $fillable = ['img','name','job'];

    public function name(){
        $lang = App::getLocale();
        return json_decode($this->name)->$lang;
    }

    public function job(){
        $lang = App::getLocale();
        return json_decode($this->job)->$lang;
    }
}
