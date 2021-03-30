<?php

namespace App\Http\Controllers;

use App\Maintenance;
use App\Vehicle;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['vehicles'] = Vehicle::orderBy('id', 'asc')->where('user_id', Auth::user()->id)
            ->paginate(15);
        return view('vehicles.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        return view('vehicles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {

            $maintenance = new Maintenance([
                'date'          => $request->date,
                'user_id'       => Auth::user()->id,
                'description'   => $request->description
            ]);
            $maintenance->save();
            $vehicle = new Vehicle([
                'maintenance_id'    => $maintenance->id,
                'user_id'           => Auth::user()->id,
                'vehicle_type'      => $request->vehicle_type,
                'automakers'        => $request->automakers,
                'model'             => $request->model,
                'year'              => $request->year,
                'color'             => $request->color,
                'odometer'          => $request->odometer,
                'chassi'            => $request->chassi,
                'plate'             => $request->plate
            ]);
            $vehicle->save();
            DB::commit();

            return response()->json(['status' => 'success', 'data' => $vehicle], 200);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => 'internal_error', 'errors' => $e->getMessage()], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        DB::beginTransaction();
        try {
            $vehicle = new Vehicle;
            $vehicle->user_id                        = Auth::user()->id;
            $vehicle->vehicle_type                   = $request->vehicle_type;
            $vehicle->maintenance_id                 = $request->maintenance_id;
            $vehicle->automakers                     = $request->automakers;
            $vehicle->model                          = $request->model;
            $vehicle->year                           = $request->year;
            $vehicle->color                          = $request->color;
            $vehicle->odometer                       = $request->odometer;
            $vehicle->chassi                         = $request->chassi;
            $vehicle->plate                          = $request->plate;

            $vehicle->save();
            DB::commit();
            return response()->json(['status' => 'success', 'data' => $vehicle], 200);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => 'internal_error', 'errors' => $e->getMessage()], 400);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicle $vehicle)
    {
        $data['vehicle'] = Vehicle::where('user_id', Auth::user()->id)->first();
        return view('vehicles.update', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {

            $maintenance = (new Maintenance())->where('id', $id)->first();

            $maintenance->date          = $request->date;
            $maintenance->description   = $request->description;
            $maintenance->save();

            $vehicle = $maintenance->vehicles[0];            

            $vehicle->maintenance_id    = $maintenance->id;
            $vehicle->vehicle_type      = $request->vehicle_type;
            $vehicle->automakers        = $request->automakers;
            $vehicle->model             = $request->model;
            $vehicle->year              = $request->year;
            $vehicle->color             = $request->color;
            $vehicle->odometer          = $request->odometer;
            $vehicle->chassi            = $request->chassi;
            $vehicle->plate             = $request->plate;
            $vehicle->save();

            DB::commit();
            return response()->json(['status' => 'success'], 200);
        } catch (\Exception $e) {

            DB::rollback();
            return response()->json(['status' => 'internal_error', 'errors' => $e->getMessage()], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicle)
    {
        //
    }
}
