<?php

namespace App\Http\Controllers;

use App\AnalyticReport;
use Illuminate\Http\Request;

// use Illuminate\Support\Facades\DB; // dhiar

class AnalyticReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AnalyticReport  $analyticReport
     * @return \Illuminate\Http\Response
     */
    public function show(AnalyticReport $analyticReport)
    {
        $start_date = "2017-01-01";
        $end_date = "2019-12-30";
        $campaign_id = "1654950";

        // $reports = AnalyticReport::all();
        $report_all = AnalyticReport::whereBetween('created_at', [$start_date, $end_date])
            ->where('campaign_id', $campaign_id)
            ->selectRaw('SUM(view) AS views')
            ->selectRaw('SUM(lead) AS leads')
            ->selectRaw('SUM(share) AS shares')
            ->selectRaw('MONTH(created_at) AS period_month')
            ->groupBy('period_month')
            ->get()->toArray();
        // $result = json_encode(["data" => $report_by_month]);

        for($month = 1 ; $month <= 12; $month++)
        {
            if(!in_array($month, array_column($report_all, 'period_month')))
            {          
                array_push($report_all, [
                    "views" => 0,
                    "leads" => 0,
                    "shares" => 0,
                    "period_month" => $month
                ]);      
            }
        }

        $price = array();
        foreach ($report_all as $key => $row)
        {
            $price[$key] = $row['period_month'];
        }
        array_multisort($price, SORT_ASC, $report_all);

        // ksort($report_all);

        $result = json_encode(["data" => $report_all]);

        // $result = DB::table('analytic_reports')->get();

        // bisa juga menggunakan AnalyticReport::whereBetween()->get()->toArray();

        // jika result tidak ada, maka kasih value 0

        dd($result);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AnalyticReport  $analyticReport
     * @return \Illuminate\Http\Response
     */
    public function edit(AnalyticReport $analyticReport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AnalyticReport  $analyticReport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AnalyticReport $analyticReport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AnalyticReport  $analyticReport
     * @return \Illuminate\Http\Response
     */
    public function destroy(AnalyticReport $analyticReport)
    {
        //
    }
}
