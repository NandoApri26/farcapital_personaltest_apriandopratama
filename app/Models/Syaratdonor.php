<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Syaratdonor extends Model
{
    use HasFactory;
    protected $table = 'syaratdonors';
    protected $fillable = ['persyaratan'];
}
