<?php

namespace App;

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
        'id', 'title', 'content', 'category', 'author', 'created_date'
    ];

}
