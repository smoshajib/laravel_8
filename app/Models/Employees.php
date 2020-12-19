<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory, Notifiable;
      protected $fillable = [
        'name','email','phone','experience','salary','vacation','city','nid','photo','address'
    ];
}
