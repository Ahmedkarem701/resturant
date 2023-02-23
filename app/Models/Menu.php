<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = ['img','menu_category_id','price','name','ingredients'];

    public function menuCategory(){
        return $this->belongsTo(MenuCategory::class);
    }

    public function name(){
        $lang = App::getLocale();
        return json_decode($this->name)->$lang;
    }
    public function ingredients(){
        $lang = App::getLocale();
        return json_decode($this->ingredients)->$lang;
    }
}
