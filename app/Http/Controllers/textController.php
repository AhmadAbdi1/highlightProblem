<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class textController extends Controller
{
    public function getAjax()
    {
        $endPoint = $_GET['endPoint'];
        $startPoint = $_GET['startPoint'];
        $selectedText = $_GET['selectedText'];
        return view('welcome',compact('endPoint','startPoint','selectedText'));
    }
}
