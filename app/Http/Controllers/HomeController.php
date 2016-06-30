<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Lang;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
}
