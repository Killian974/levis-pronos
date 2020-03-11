<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pronos extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pronos';

    public $timestamps = false;

    protected $fillable = [
        'id', 'sport', 'date_match', 'status', 'team_1', 'team_2', 'prono', 'cote', 'create_at'
    ];

}
