<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function getChartData()
    {
        $data = [
            'labels' => ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            'datasets' => [
                [
                    'label' => '# of Votes',
                    'data' => [12, 19, 3, 5, 2, 3],
                    'borderWidth' => 1
                ]
            ]
        ];

        return response()->view("chart");
        
    }
}
