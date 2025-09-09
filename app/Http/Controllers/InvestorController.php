<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Investor;

class InvestorController extends Controller
{
    public function index()
    {
        $investors = Investor::all();
        $data = ['investors' => $investors];
        return view('investor.index', $data);
    }
}
