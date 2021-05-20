<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParticipateEvent extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'firstname', 'email','phone', 'nbPerson'];
}
