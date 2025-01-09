<?php

namespace App\Http\Controllers;

use PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\McuTransaction;

class PDFController extends Controller
{
    public function downloadpdf($id)
    {
        $mcutransaksi = McuTransaction::find($id);

        // Prepare data for the view
        $data = [
            'title' => 'MCU Report',
            'date' => date('m/d/Y'),
            'mcutransaksi' => $mcutransaksi,
        ];

        // Set options
        $pdfOptions = [
            'isRemoteEnabled' => true,
        ];

        // Use the Pdf facade to load the view and generate the PDF
        $pdf = PDF::loadView('userPDF', $data)->setOptions($pdfOptions);

        // Menentukan nama file PDF sesuai dengan nama dan registrasi
        $nama = $mcutransaksi->nama;
        $registrasi = $mcutransaksi->kd_regpoli;
        $fileName = "{$nama}_{$registrasi}_MCURSDI.pdf";

        //dd($data);
        //return view('userPDF', $data);
        //Return the PDF as a download
        return $pdf->download($fileName);
    }
}
