<?php

namespace App\Models\Tasks;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static find($id)
 */
class NewTask extends Task
{
    protected $table = 'new_tasks';

    protected $fillable = [
        '',
    ];
}
