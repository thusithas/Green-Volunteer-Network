<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Organization extends Model
{
    use Notifiable;

    protected $fillable = [
        'orgname', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
