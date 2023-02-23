<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class ClientFeedback extends Model
{
    use HasFactory;
    protected $fillable = ['name','job','feedback'];
    public function feedback(){
        $lang = App::getLocale();
        return json_decode($this->feedback)->$lang;
    }
}
