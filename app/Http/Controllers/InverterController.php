<?php

namespace App\Http\Controllers;

use App\Models\inverter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InverterController extends Controller
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
     * @param  \App\Models\inverter  $inverter
     * @return \Illuminate\Http\Response
     */
    public function show(inverter $inverter)
    {
        // $log = log::findOrFail($inverter);

        $de = DB::table('memoreys')
            ->join('logs', 'memoreys.id', '=', 'logs.inv_status')
            ->where('memoreys.inv_id', '=', 3)
            ->orderBy('logs.id', 'desc')
            ->limit(30)
            ->get();

        return view('inverter.show', compact('de'));

        // return DB::table('memoreys')
        //     ->join('logs', 'memoreys.id', '=', 'logs.inv_status')
        //     ->where('memoreys.inv_id', '=', 1)
        //     ->orderBy('logs.id', 'desc')
        //     ->limit(3)
        // // ->select('memoreys.output_load_percent')
        // // ->max('id')
        //     ->get();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\inverter  $inverter
     * @return \Illuminate\Http\Response
     */
    public function show1($id)
    {
        // $log = log::findOrFail($inverter);

        $de = DB::table('memoreys')
            ->join('logs', 'memoreys.id', '=', 'logs.inv_status')
            ->where('memoreys.inv_id', '=', $id)
            ->orderBy('logs.id', 'desc')
            ->limit(30)
            ->get();

        return view('inverter.show', compact('de'));

        // return DB::table('memoreys')
        //     ->join('logs', 'memoreys.id', '=', 'logs.inv_status')
        //     ->where('memoreys.inv_id', '=', 1)
        //     ->orderBy('logs.id', 'desc')
        //     ->limit(3)
        // // ->select('memoreys.output_load_percent')
        // // ->max('id')
        //     ->get();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\inverter  $inverter
     * @return \Illuminate\Http\Response
     */
    public function edit(inverter $inverter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\inverter  $inverter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, inverter $inverter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\inverter  $inverter
     * @return \Illuminate\Http\Response
     */
    public function destroy(inverter $inverter)
    {
        //
    }
}
