<?php

namespace App\Models\Tasks;

/**
 * @method static find($id)
 */
class CancelledTask extends Task
{
    protected $table = 'cancelled_tasks';

    protected $fillable = [
        'cancel_reason',
        'cancelled_at'=>'datetime',
    ];
}
