<?php

namespace App\Http\Controllers;


use App\Charts\SepatuChart;
use App\Models\Shoe;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(SepatuChart $chart){
        $pageTitle = 'Home';
        return view('home',[
            'pageTitle'=>$pageTitle,
            'chart'=>$chart->build(),
    ]);
}
