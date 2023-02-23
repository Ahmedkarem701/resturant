<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Gallery extends Model
{
    use HasFactory;
    protected $fillable = ['img','name'];
    public function name(){
        $lang = App::getLocale();
        return json_decode($this->name)->$lang;
    }
}
