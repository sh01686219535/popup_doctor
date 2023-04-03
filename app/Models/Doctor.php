<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    public function Branch(){
        return $this->belongsTo(Branch::class);
    }
    public function department(){
        return $this->belongsTo(Department::class,'dept_id');
    }
}
