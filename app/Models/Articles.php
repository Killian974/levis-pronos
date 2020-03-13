<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'articles';

    public $timestamps = false;

    protected $fillable = [
        'id', 'title', 'url_img_article', 'content', 'category', 'author', 'created_date'
    ];

}
