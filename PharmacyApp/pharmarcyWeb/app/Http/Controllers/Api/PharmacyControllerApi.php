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
      ->orderBy('distance')
      ->limit(5)
      ->withCount("report")
      ->get();
    $reports = [];
    // foreach ($pharmacies as $key => $pharmacy) {
    //   $reports[] = $pharmacy->report;
    // }

    return response()->json([
      "pharmacies" => $pharmacies,
      // "reports" => $reports,
    ]);
    // return response()->json([
    //   "pharmacies" => Pharmacy::where("ville", "=", "Fkih Ben Salah")->paginate(140),
    //   // "pharmacies" => Pharmacy::all(),
    // ]);
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
        'report_count' => $report,
        "status" => false
      ]);
    }

    $report = new Report();
    $report->ip_address = $ipAddress;
    $report->pharmacy_id = $pharmacyId;
    $report->save();

    return response()->json([
      'message' => 'Your request is saved with success ! ',
      "status" => true
    ]);
  }


  public function search(Request $request)
  {

    $longitude = $request->input("longitude");
    $latitude = $request->input("latitude");
    $pharmacy_name = $request->input("pharmacy_name");

    $pharmacies = Pharmacy::selectRaw("*,
    ( 6371 * acos( cos( radians(?) ) *
    cos( radians( latitude ) )
    * cos( radians( longitude ) - radians(?)
    ) + sin( radians(?) ) *
    sin( radians( latitude ) ) )
) AS distance", [$latitude, $longitude, $latitude])
      ->when($pharmacy_name, function ($query) use ($pharmacy_name) {
        return $query->where('name', 'LIKE', '%' . $pharmacy_name . '%');
      })
      ->orderBy('distance')
      ->limit(30)
      ->withCount("report")
      ->get();
      return response()->json([
        "pharmacies" => $pharmacies,

      ]);
  }
}
