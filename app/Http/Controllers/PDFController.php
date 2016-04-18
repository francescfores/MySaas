<?php

namespace App\Http\Controllers;

use DOMPDF;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Http\Response;
use View;

class PDFController extends Controller
    {

    public function invoiceHtml(){
        $data = [
            'vendor' => "PROVA",
            'user' => "fran"
        ];

    return view('receipt', $data);
    }

    public function downloadInvoice(){

        if (! defined('DOMPDF_ENABLE_AUTOLOAD')) {
            define('DOMPDF_ENABLE_AUTOLOAD', false);
        }
        if (file_exists($configPath = base_path().'/vendor/dompdf/dompdf/dompdf_config.inc.php')) {
            require_once $configPath;
        }

        $dompdf = new DOMPDF;
        //$dompdf->load_html("<h1>Hei</h1>"); //pasar-li la plantilla
        $data = [
            'vendor' => "PROVA",
            'user' => [
                "email" =>" email"
            ]
        ];
        $dompdf->load_html($this->view($data)->render()); //data
        $dompdf->render();

        return $this->download($dompdf->output());

       //return view('invoice');
    }


    public function download($pdf){

      //$filename = 'prova_'.$this->date()->month.'_'.$this->date()->year.'.pdf';
        $filename =  "hola.pdf";

        return new Response($pdf, 200, [
            'Content-Description' => 'File Transfer',
            //'Content-Disposition' => 'attachment; filename="'.$filename.'"',
            'Content-Transfer-Encoding' => 'binary',
            'Content-Type' => 'application/pdf',
        ]);
    }

    public function view( $data)
    {
        return View::make('receipt',$data);
    }


}
