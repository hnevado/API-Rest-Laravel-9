<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function getExcerptAttribute()
    {

        $excerpt=substr($this->content,0,120)."...";
        return $excerpt;

    }

    public function getPublishedAtAttribute()
    {

        //Para mostrar la fecha: $this->created_at->format('d-M-Y');
        //Para mostrar hace cuanto tiempo fue creado: $this->created_at->diffForHumans();
        return $this->created_at->diffForHumans();
    }

    public function user()
    {

        return $this->belongsTo(User::class);

    }

}
