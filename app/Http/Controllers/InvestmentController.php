<?php

namespace App\Http\Controllers;

use App\Models\Investment;

class InvestmentController extends Controller
{
    public function index()
    {
        $investments = Investment::all();
        $data = ['investments' => $investments];
        return view('investment.index', $data);
    }
}
