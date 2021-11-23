<?php
  
namespace App\Imports;
  
use App\Task;
use Maatwebsite\Excel\Concerns\ToModel;
  
class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Task([
            'name'     => $row[0],
            'email'    => $row[1], 
            // 'password' => \Hash::make('123456'),
            'address' => $row[2],
            'phno'=>$row[3],
        ]);
    }
}