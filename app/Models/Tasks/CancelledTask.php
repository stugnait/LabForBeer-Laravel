<?php

namespace App\Models\Tasks;

class CancelledTask extends Task
{
    protected $table = 'cancelled_tasks';

    protected $fillable = [
        'cancel_reason',
        'cancelled_at'=>'datetime',
    ];
}
