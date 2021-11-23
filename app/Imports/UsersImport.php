<?php

namespace App\Imports;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $isUser = User::where('email', $row[1])->first();

        if (!$isUser) {
            $user = new User([
                'name'     => $row[0],
                'email'    => $row[3] . '@vnu.edu.vn',
                'password' => Hash::make($row[2]),
                'id_student' => $row[3],
            ]);
            return $user;
        }
    }
}