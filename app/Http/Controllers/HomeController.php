<?php

namespace Argentino\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function prueba()
    {

      $view = \View::make('prueba')->render();
      $pdf = new Dompdf();
        $pdf->loadHtml($view);
        $pdf->setPaper('A4', 'portrait');
        $pdf->render();
        $pdf->stream("prueba.pdf", array("Attachment"=>0));
    }
}
