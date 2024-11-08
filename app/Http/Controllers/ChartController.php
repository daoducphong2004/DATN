<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    function index(){
        return  view("admin.dashboard");
    }
}
