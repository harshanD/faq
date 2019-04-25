<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    //

    protected $fillable = [
        'id',
        'q_id',
        'answer',
        'status',
        'created_at',
        'updated_at',
    ];

    public function Questions()
    {
        return $this->belongsTo('App\Models\Questions', 'id');
    }


}
