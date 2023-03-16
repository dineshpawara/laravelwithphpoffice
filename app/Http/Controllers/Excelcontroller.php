<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\IOFactory;

class Excelcontroller extends Controller
{

    public function ExcelData(Request $request){        //create function for recieve file
        $excelFile = $request->validate([               //validate excel file
            'excel_file' => 'required|mimes:xlsx',
        ]);

        $excelFile=$request->file('excel_file');        //accept excel file from user

        $spreadsheet = IOFactory::load($excelFile);     //load the excel file using phpoffice library

        $worksheet = $spreadsheet->getActiveSheet();    //accept loaded file
        $excelData = $worksheet->toArray();             //convert file data into array

        foreach($excelData as $rowNumber => $row){
            $dataread[] = implode($row);                //use implode function to convert excelData of Array to String
        }
        $data = compact('dataread');                    //send all data to the veiw
        return view('exceldata')->with($data);
    }

    public function ExcelRestriction(Request $request){
        $excelFile = $request->validate([
            'excel_file' => 'required|file|mimes:xlsx',
        ]);
        $excelFile = $request->file('excel_file');

        $spreadsheet = IOFactory::load($excelFile);
        $worksheet = $spreadsheet->getActiveSheet();
        $excelData = $worksheet->toArray();

        $text = [];
        $uniqueEmails = [];
        foreach($excelData as $rowNumber => $row){
            $dataread = implode($row);
            if(empty($dataread)){                       //check if excel file is empty
                return redirect()->back()->with('error', 'Your Excel File is Empty');
            }
            if(!filter_var($dataread, FILTER_VALIDATE_EMAIL)){  //text data restriction and validation
                $text[] = $rowNumber + 1;
                return redirect()->back()->with('error', 'No text allowed in file, select valid email addresses');
            }
            if(!in_array($dataread, $uniqueEmails)){
                $uniqueEmails[] = $dataread;            //convert all uniqueemails into array and restrict the duplicate emails
            }
        }
        $data = compact('uniqueEmails');
        return view('exceldata')->with($data);
    }
}
