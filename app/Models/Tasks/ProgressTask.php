<?php

namespace App\Models\Tasks;

use Illuminate\Database\Eloquent\Model;

class ProgressTask extends Task
{
    protected $table = 'progress_tasks';

    protected $fillable = [
        'employee_id',
        'take_at'
    ];
}
