<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class MenuCategory extends Model
{
    use HasFactory;

    protected $fillable = ['icon','name'];

    public function menus(){
        return $this->hasMany(Menu::class);
    }

    public function name(){
        $lang = App::getLocale();
        return json_decode($this->name)->$lang;
    }
}
