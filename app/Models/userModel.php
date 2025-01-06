<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class userModel extends Model
{
    use HasFactory, Notifiable;
    public $timestamps = false;

    protected $table = 'tbusers';
    protected $fillable = [
        'use_id',
        'use_name',
        'use_cpf',
        'use_email',
        'use_pass',
        'use_date'
    ];
}
