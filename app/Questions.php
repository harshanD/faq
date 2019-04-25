<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{

    protected $fillable = [
        'id',
        'question',
        'status',
        'created_at',
        'updated_at',
    ];

    public function answers()
    {
        return $this->hasMany('App\Answer', 'q_id');
    }


}
