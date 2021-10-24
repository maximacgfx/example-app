<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QrCodeController extends Controller
{
    public function index()
    {
      return view('qrcode')->with('time' , now())->with('time2' , now()->format('M jS Y g:ia'));
    }
}
