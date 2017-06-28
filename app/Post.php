<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $table = 'posts';
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'title', 'body', 'author_id', 'score', 'checked'
    ];

    public function author() {
        return $this->belongsTo('App\User', 'author_id', 'id');
    }
}
