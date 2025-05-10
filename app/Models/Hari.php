<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hari extends Model
{
    use HasFactory;

    protected $table = 'hari';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'tanggal',
        'task'
    ];
    

}
