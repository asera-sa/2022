<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = ['name','academic_year_id','year_works','final','end_degree','stat','doctor_id'];
    public function AcademicYear()
    {
        return $this->belongsTo(AcademicYear::class);
    }

    public function Doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
