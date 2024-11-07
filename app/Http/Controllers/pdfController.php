<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use PDF;



class pdfController extends Controller
{
    public function pdf_demo()
    {
        // $data = [
        //     'title' => "welcome new errro pdf",
        //     'date' =>date('m-d-y'),
        // ];
        // $pdf = PDF::loadView('pdf.mydemo',$data);
        $pdf = PDF::loadView('addEmployee');
        return $pdf->download('errorpdf.pdf');
    }

    public function pdf_all_employee(){
        $getReocrd = Employee::get();
        $data = [
            'title' => "Show All Employee",
            'date' =>date('m-d-y'),
            'getReocrd' =>  $getReocrd
        ];
        $pdf = PDF::loadView('pdf.allEmployee',$data);
        return $pdf->download('allEmployee.pdf');
    }

   
    public function  pdf_first($id){
        $myrecord = Employee::find($id);
        $data = [
            'title' => "My Employement Record",
            'date' =>date('m-d-y'),
            'myreocrd' => $myrecord, 
        ];
        $pdf = PDF::loadView('pdf.speEmployee',$data);
        return $pdf->download('MyRecord.pdf');
    }
}
