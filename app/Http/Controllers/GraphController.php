<?php

namespace App\Http\Controllers;

class GraphController extends Controller
{
    public function index()
    {
        /*
         *  Todo: calculate Sharpe Ratio, Calmar Ratio, MDD, Annual Return here
         *  Todo: Make sure the next page has a graph
         *
         */
        return view('graph.index');
    }
}
