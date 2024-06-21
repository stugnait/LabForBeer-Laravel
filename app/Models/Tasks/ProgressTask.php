<?php

namespace App\Models\Tasks;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static find($id)
 */
class ProgressTask extends Task
{
    protected $table = 'progress_tasks';

    public $fillable = [
        'employee_id',
        'take_at'
    ];
}
