<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Setting;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $data ['settings'] = Setting::first();

        return view('front.contact.index')->with($data);
    }

}
