<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Maatwebsite\Excel\Excel;

class ImportExcelController extends Controller
{
    function index()
    {
     $data = DB::table('tasks')->orderBy('id', 'DESC')->get();
     return view('import_excel', compact('data'));
    }

    function import(Request $request)
    {
     $this->validate($request, [
      'select_file'  => 'required|mimes:xls,xlsx'
     ]);

     $path = $request->file('select_file')->getRealPath();

    //  $data=$request->all();        

    //  $filenaeeee = $request->file('Book1');

    //  Excel::load(new tasks($data),  $filenaeeee);
    

     $data= Excel::load($path, function($reader) {})->get();
    
     if($data->count() > 0)
     {
      foreach($data->toArray() as $key => $value)
      {
       foreach($value as $row)
       {
        $insert_data[] = array(
         'Name'  => $row['name'],
         'Email'   => $row['email'],
         'Address'   => $row['address'],
         'Phno'    => $row['phno'],
      
        );
       }
      }

      if(!empty($insert_data))
      {
       DB::table('tasks')->insert($insert_data);
      }
     }
     return back()->with('success', 'Excel Data Imported successfully.');
    }
}