<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    use HasFactory;

    public function scopePublished($query){

                    //Filtra los post donde la publicación sea menor o igual a la fecha actual
        $query->where('published_at','<=', Carbon::now());
    }

    public function scopeFeatured($query){
        $query->where('featured', true);
    }


}
