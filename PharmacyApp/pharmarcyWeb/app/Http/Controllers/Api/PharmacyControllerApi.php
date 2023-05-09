<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pharmacy;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PharmacyControllerApi extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index(Request $request)
  {
    $longitude = $request->input("longitude");
    $latitude = $request->input("latitude");
    $pharmacies = Pharmacy::selectRaw("*,
    ( 6371 * acos( cos( radians(?) ) *
    cos( radians( latitude ) )
    * cos( radians( longitude ) - radians(?)
    ) + sin( radians(?) ) *
    sin( radians( latitude ) ) )
) AS distance", [$latitude, $longitude, $latitude])
      ->having('distance', '<', 20)
      ->orderBy('distance')
      ->get(20);

    return response()->json([
      "pharmacies" => $pharmacies,
    ]);
    // return response()->json([
    //   "pharmacies" => Pharmacy::where("ville", "=", "Fkih Ben Salah")->paginate(140),
    //   // "pharmacies" => Pharmacy::all(),
    // ]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $ipAddress = $request->input('ipAddress');
    $pharmacyId = $request->input('pharmacyId');
    $report = Report::where("ip_address", $ipAddress)->where("pharmacy_id", $pharmacyId)->first();
    if ($report) {
      return response()->json([
        'message' => 'Report  is alreadry sent !',
        "status" => false
      ]);
    }
    if (!empty($ipAddress)) {
      $report = new Report();
      $report->ip_address = $ipAddress;
      $report->pharmacy_id = $pharmacyId;
      $report->save();
    }
    return response()->json([
      'message' => 'Your request is saved with success ! ',
      "status" => true
    ]);
  }

  /**
   * Display the specified resource.
   */
  public function show(Pharmacy $pharmacy)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Pharmacy $pharmacy)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Pharmacy $pharmacy)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Pharmacy $pharmacy)
  {
    //
  }
}
