<?php

namespace App\Models\Tasks;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Task extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'description',
        'deadline',
        'client_id',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'price',
    ];

    protected $hidden = [

    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
