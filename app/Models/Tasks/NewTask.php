<?php

namespace App\Models\Tasks;

use Illuminate\Database\Eloquent\Model;

class NewTask extends Task
{
    protected $table = 'new_tasks';

    protected $fillable = [
        '',
    ];
}
