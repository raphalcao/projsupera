<?php

namespace App\Http\Controllers;

use App\Maintenance;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        /**
            $data['clients'] = Client::select("*")
            ->where('user_id', Auth::user()->id)
            ->whereNotNull('birth')
            ->whereRaw("DATE_FORMAT(birth, '%m-%d') BETWEEN DATE_FORMAT(?, '%m-%d') AND DATE_FORMAT(?, '%m-%d')", [Carbon::now()->subDays(10), Carbon::now()->addDays(10)])
            ->get();

        $data['alerts'] = Alert::with('client')
            ->where('status', 1)
            ->where('user_id', Auth::user()->id)
            ->whereBetween('date', [Carbon::now()->subDays(10), Carbon::now()->addDays(10)])
            ->orderBy('date', 'asc')
            ->paginate(15);

         */

        $data['maintenances'] = Maintenance::select("*")
            ->where('user_id', Auth::user()->id)
            ->whereNotNull('date')
            ->whereRaw("DATE_FORMAT(date, '%m-%d') BETWEEN DATE_FORMAT(?, '%m-%d') AND DATE_FORMAT(?, '%m-%d')", [Carbon::now(), Carbon::now()->addDays(7)])
            ->get();


        return view('home', $data);
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
     * @param  \App\Maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function show(Maintenance $maintenance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function edit(Maintenance $maintenance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Maintenance $maintenance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Maintenance $maintenance)
    {
        //
    }
}
