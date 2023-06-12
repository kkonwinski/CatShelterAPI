<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shelter extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address'];

    public function cats(){
        return $this->hasMany(Cat::class);
    }

    public function workers(){
        return $this->hasMany(Worker::class);
    }
}
