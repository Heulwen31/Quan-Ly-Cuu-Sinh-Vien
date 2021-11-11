<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;

class StudentImport implements ToModel
{
    /**
     * convert date from excel file to database
     */
    public function transformDate($value, $format = 'd-m-Y')
    {
        try {
            return \Carbon\Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($value));
        } catch (\ErrorException $e) {
            return \Carbon\Carbon::createFromFormat($format, $value);
        }
    }
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Student([
            //
            'id' => $row[3],
            'cccd' => $row[4],
            'name' => $row[0],
            'sex' => $row[5],
            'birth' => $this->transformDate($row[6]),
            'email' => $row[1],
            'phone' => $row[7],
            'address' => $row[8],
            'job' => $row[9],
        ]);
    }
}
