<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('en') == true) {
            dd('en');
        } elseif ($request->has('vi') == true) {
            dd('vi');
        }
    }
}
