<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dashboard;

class DashboardController extends Controller
{
    public function index(){
        $test = Dashboard::take(10)->get()->toArray();

        dd($test);
    }
}