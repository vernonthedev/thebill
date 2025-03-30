<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Charts\UserChart;

class DashboardController extends Controller
{
    public function index() {
        // create a temp chart with temp data
        $chart = new UserChart();
        $chart->labels(['One','Two','Three','Four']);
        $chart->dataset('My dataset','line',[1,2,3,4]);
        $chart->dataset('My dataset 2','line',[4,3,2,1]);

        // send the chart info to the temp
        return view('dashboard', compact('chart'));
    }
}
