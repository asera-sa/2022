<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name','number_student','nationality_id','id_number',
    'date_of_birth','gender','mother_name','place_of_living','email','phone',
    'recipe','academic_year_id','date_of_registration','note','stat'
      ];

    public function Nationality()
    {
        return $this->belongsTo(Nationality::class);
    }
    public function AcademicYear()
    {
        return $this->belongsTo(AcademicYear::class);
    }


}
