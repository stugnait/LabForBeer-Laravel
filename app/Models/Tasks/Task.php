<?php

namespace App\Models\Tasks;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * @method static find($id)
 */
class Task extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    public $fillable = [
        'name',
        'description',
        'deadline',
        'client_id',
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp',
        'price',
    ];

    protected $hidden = [

    ];
}
