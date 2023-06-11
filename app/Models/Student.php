<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;



class Student extends Model
{
    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'email',
        'address',
        'department',
        'level',
        'mobile',
    ];
     protected static function newFactory(): Factory
{
    return StudentFactory::new();
}
    use HasFactory;
}
