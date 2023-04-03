<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    public function department(){
        return $this->hasMany(Department::class);
    }
    public function Doctor(){
        return $this->hasMany(Doctor::class);
    }
}
