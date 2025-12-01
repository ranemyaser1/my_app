<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'student';
    
    protected $fillable = [
        'name' ,
        'level',
        'age',
        'student_gov',
        'image',
    ];
    public function government() {
    return $this->belongsTo(Government::class,'student_gov');
}
}
