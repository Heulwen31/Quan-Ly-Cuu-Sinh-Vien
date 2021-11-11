<?php

namespace App\Imports;

use App\Models\Study_Detail;
use Maatwebsite\Excel\Concerns\ToModel;

class StudyDetailImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Study_Detail([
            //
            'student_id' => $row[3],
            'consultant' => $row[10],
            'cpa' => $row[11],
            'point_training' => $row[12],
            'course' => $row[13],
            'faculty' => $row[14],
        ]);
    }
}
