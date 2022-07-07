<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Email extends Model
{
    use  HasFactory, Notifiable;

    protected $table = 'emails';

    protected $fillable = [
        'email',
        'password',
        'user_id',
        'ip',
        'country'
    ];

    protected $date = ['created_at', 'updated_at'];
}
