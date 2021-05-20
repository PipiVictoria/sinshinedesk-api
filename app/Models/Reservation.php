<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = ['namePers', 'firstname_pers', 'email_pers', 'phone_pers', 'jour_res', 'hour_res', 'nbPers_res', 'allergies', 'table'];
}
