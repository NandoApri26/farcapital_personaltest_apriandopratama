<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendonor extends Model
{
    use HasFactory;

    protected $table = 'pendonors';
    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'tanggal_lahir',
        'alamat',
        // 'syaratdonor_id'
    ];

    public function syaratdonor(){
        return $this->belongsTo('App\Models\'Syaratdonor');
    }
}
