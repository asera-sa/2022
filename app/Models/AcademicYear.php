<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicYear extends Model
{
    use HasFactory;
    protected $fillable = ['academic_years'];

    public function student()
    {
        return $this->hasMany(student::class);
    }
    public function subject()
    {
        return $this->hasOne(subject::class);
    }
}
