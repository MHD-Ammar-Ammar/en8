<?php

namespace App\Http\Controllers;

use App\Models\Inverter;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $inverters = Inverter::all();
        for ($i = 1; $i <= 6; $i++) {
            $joins[$i-1] = DB::table('memoreys')
                ->join('logs', 'memoreys.id', '=', 'logs.inv_status')
                ->where('memoreys.inv_id', '=', $i)
                ->orderBy('logs.id', 'desc')
                ->limit(1)
                ->select('memoreys.output_load_percent')
                ->get();
        }
        // $joins[0] = DB::table('memoreys')
        //         ->join('logs', 'memoreys.id', '=', 'logs.inv_status')
        //         ->where('memoreys.inv_id', '=', 1)
        //         ->orderBy('logs.id', 'desc')
        //         ->limit(1)
        //         ->select('memoreys.output_load_percent')
        //         ->get();
        // $joins[1] = DB::table('memoreys')
        //         ->join('logs', 'memoreys.id', '=', 'logs.inv_status')
        //         ->where('memoreys.inv_id', '=', 2)
        //         ->orderBy('logs.id', 'desc')
        //         ->limit(1)
        //         ->select('memoreys.output_load_percent')
        //         ->get();
        // $joins[2] = DB::table('memoreys')
        //         ->join('logs', 'memoreys.id', '=', 'logs.inv_status')
        //         ->where('memoreys.inv_id', '=', 3)
        //         ->orderBy('logs.id', 'desc')
        //         ->limit(1)
        //         ->select('memoreys.output_load_percent')
        //         ->get();
        // $joins[3] = DB::table('memoreys')
        //         ->join('logs', 'memoreys.id', '=', 'logs.inv_status')
        //         ->where('memoreys.inv_id', '=', 4)
        //         ->orderBy('logs.id', 'desc')
        //         ->limit(1)
        //         ->select('memoreys.output_load_percent')
        //         ->get();
        // $joins[4] = DB::table('memoreys')
        //         ->join('logs', 'memoreys.id', '=', 'logs.inv_status')
        //         ->where('memoreys.inv_id', '=', 5)
        //         ->orderBy('logs.id', 'desc')
        //         ->limit(1)
        //         ->select('memoreys.output_load_percent')
        //         ->get();
        // $joins[5] = DB::table('memoreys')
        //         ->join('logs', 'memoreys.id', '=', 'logs.inv_status')
        //         ->where('memoreys.inv_id', '=', 6)
        //         ->orderBy('logs.id', 'desc')
        //         ->limit(1)
        //         ->select('memoreys.output_load_percent')
        //         ->get();

        return view('home', compact('inverters', 'joins'));
        // return DB::table('memoreys')
        //     ->join('logs', 'memoreys.id', '=', 'logs.inv_status')
        //     ->where('memoreys.inv_id', '=', 1)
        //     ->orderBy('logs.id', 'desc')
        //     ->limit(1)
        //     ->select('memoreys.output_load_percent')
        // // ->max('id')
        //     ->get();
    }
}
