<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_name',
        'Slug',

      ];

    public function sub_categories(){
        return $this->hasMany(Category::Class,'parent_id')->with('children');
    }
}
