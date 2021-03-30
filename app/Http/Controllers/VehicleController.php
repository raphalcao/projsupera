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
            $vehicle = new Vehicle([
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
            $maintenance = new Maintenance([
                'date'              => $request->date,
                'vehicle_id'        => $vehicle->id,
                'user_id'           => Auth::user()->id,
                'description'       => $request->description
            ]);
            $maintenance->save();

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
        //
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
            $vehicle = (new Vehicle())->where('id', $id)->first();

            $vehicle->vehicle_type      = $request->vehicle_type;
            $vehicle->automakers        = $request->automakers;
            $vehicle->model             = $request->model;
            $vehicle->year              = $request->year;
            $vehicle->color             = $request->color;
            $vehicle->odometer          = $request->odometer;
            $vehicle->chassi            = $request->chassi;
            $vehicle->plate             = $request->plate;
            $vehicle->save();

            $maintenance = $vehicle->maintenance[0];

            $maintenance->date          = $request->date;
            $maintenance->description   = $request->description;
            $maintenance->vehicle_id    = $vehicle->id;
            $maintenance->save();

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
    public function destroy(Vehicle $id)
    {
        try {
            Vehicle::find($id)->first()->delete();
            return back()->with(['status' => 'Deleted successfully']);
        } catch (\Exception $e) {
            return response()->json(['status' => 'internal_error', 'errors' => $e->getMessage()], 400);
        }
    }
}
