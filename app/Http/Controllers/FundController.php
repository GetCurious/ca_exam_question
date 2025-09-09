<?php

namespace App\Http\Controllers;

use App\Models\Fund;

class FundController extends Controller
{
    public function index()
    {
        $funds = Fund::all();
        $data = ['funds' => $funds];
        return view('fund.index', $data);
    }
}
