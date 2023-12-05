<?php

namespace App\Models;

use CodeIgniter\Model;

class AcademicYearsModel extends Model
{
    protected $table = 'academic_years';
    protected $useTimestamps = true;
    protected $allowedFields = ['academic_year', 'semester', 'current_semester', 'admission_semester'];

    public function getAcademicByID($id)
    {
        return $this->where('id', $id)->first();
    }
}
