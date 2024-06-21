<?php

namespace App\Models\Tasks;

class DoneTask extends ProgressTask
{
    protected $table = 'done_tasks';

    public $fillable = [
        'done_at'=>'datetime',
        'rating',

    ];
}
