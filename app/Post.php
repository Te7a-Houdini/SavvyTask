<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Post extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['title','description'];
    protected $fillable = ['image_url','category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public static function uploadFile(Request $request)
    {
        $uploadedFile = $request->file('image_url');

        $newFileName = 'Post_Image_'. Carbon::now()->timestamp .'.'.$uploadedFile->extension();

        $uploadedFile->move('images/posts', $newFileName);

        return $newFileName;
    }
}
