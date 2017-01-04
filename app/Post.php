<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['title','description'];
    protected $fillable = ['image_url','category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
