<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

class GraphController extends Controller
{
    public function index()
    {
        $csvPath = public_path('sample_data.csv');
        $handle = fopen($csvPath, 'r');

        // chart data
        $equity = [];
        $dates = [];

        $dailyPnL = [];
        $maxDrawDown = 0.0;

        $header = fgetcsv($handle);
        while (($row = fgetcsv($handle)) !== false) {
            [$date, $pnl, $drawDown, $capital] = $row;
            $dates[] = Carbon::parse($date)->format('d-M-Y');
            $equity[] = $capital;
            $dailyPnL[] = (float)$pnl;
            $drawDown = (float)$drawDown;

            // Max Drawdown
            if ($drawDown > $maxDrawDown) {
                $maxDrawDown = $drawDown;
            }
        }
        fclose($handle);

        // Compute mean from dailyPnL
        $mean = array_sum($dailyPnL) / 365;

        // Compute PnL standard deviation
        $variance = 0.0;
        foreach ($dailyPnL as $pnl) {
            $variance += ($pnl - $mean) ** 2;
        }
        $variance /= 365 - 1;
        $std = sqrt($variance);

        // Compute Annual Return
        $annualReturn = $mean * 365;

        // Compute Sharpe Ratio
        $sharpe = ($mean / $std) * sqrt(365);

        // Compute Calmar Ratio
        $calmar = $annualReturn / abs($maxDrawDown);

        $metrics = [
            'annual_return' => $annualReturn,
            'sharpe_ratio' => $sharpe,
            'max_drawdown' => $maxDrawDown,
            'calmar_ratio' => $calmar,
        ];

        return view('graph.index', [
            'dates' => $dates,
            'equity' => $equity,
            'metrics' => $metrics,
        ]);
    }
}
