<?php

namespace App\Models\Tasks;

/**
 * @method static find($id)
 */
class CancelledTask extends Task
{
    protected $table = 'cancelled_tasks';

    public $fillable = [
        'cancel_reason',
        'cancelled_at'=>'datetime',
    ];
}
