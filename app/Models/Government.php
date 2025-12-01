<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Government extends Model
{
 protected $table = 'government';

    protected $fillable = [
        'name',
    ];
     public function students()
    {
        return $this->hasMany(Student::class);
    }
}
