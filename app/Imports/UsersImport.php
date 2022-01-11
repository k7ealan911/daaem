<?php

namespace App\Imports;

use App\student;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return User|null
     */
    public function model(array $row)
    {
        return new student([
           'name'     => $row[0],
           'email'    => $row[1], 
        ]);
    }
}