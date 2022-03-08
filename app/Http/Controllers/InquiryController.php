<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;

class InquiryController extends Controller
{
    public function index() 
    {
        return view('index');
    }
    public function create(Request $request)
    {
        $form = $request->all();
        Inquiry::create($form);
        return view('/thanks');
    }
    public function review()
    {
        return view('/thanks');
    }
}
