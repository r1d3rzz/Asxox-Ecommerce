<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteTemplateController extends Controller
{
    public function home()
    {
        return view('website.index');
    }
}
