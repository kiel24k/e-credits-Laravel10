<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class client extends Authenticatable
{
    use HasFactory;
    protected $table = 'clients';
    protected $fillable = [
                'username',
                'email',
                'user_type',
                'password',

    ];
}
