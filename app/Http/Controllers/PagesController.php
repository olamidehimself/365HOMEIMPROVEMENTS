<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function career()
    {
        return view('career.career');

    }

   /* public function seo()
    {
        return view('career.seo');

    }
   */
}
