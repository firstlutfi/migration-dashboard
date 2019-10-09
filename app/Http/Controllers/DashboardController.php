<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dashboard;

class DashboardController extends Controller
{
    public function index(Request $request){
        $data = Dashboard::getAllDataForTable($request);
        return view('dashboard', ['collection' => $data]);
    }

    public function getAllDataForTable(Request $request){
        $data = Dashboard::getAllDataForTable($request);

        return $data;
    }
}