<?php

namespace App\Models\Tasks;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static find($id)
 * @method static create(array $validated)
 */
class NewTask extends Task
{
    protected $table = 'new_tasks';

}
