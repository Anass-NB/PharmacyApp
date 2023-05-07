<?php

namespace App\Http\Controllers;

use App\Models\Pharmacy;
use Illuminate\Http\Request;

class PharmacyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("pages.pharmacies.index")->with([
          "pharmacies"=>Pharmacy::paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view("pages.pharmacies.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $request->validate([
          "name" =>"required",
          "description" =>"required",
          "address" =>"required",
          "phone1" =>"required",
          "website" =>"required",
          "longitude" =>"required",
          "latitude" =>"required",
        ]);
        $pharmacy = new Pharmacy();
        $pharmacy->name = $request->name;
        $pharmacy->description = $request->description;
        $pharmacy->address = $request->address;
        $pharmacy->phone1 = $request->phone1;
        $pharmacy->phone2 = $request->phone2;
        $pharmacy->website = $request->website;
        $pharmacy->longtiude = $request->longitude;
        $pharmacy->latitude = $request->latitude;
        $pharmacy->save();
        notify()->success('Pharmacy added Successfully !');

        return redirect()->route("pharmacies.index");
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
    public function edit(Request $request)
    {
        $pharmacy = Pharmacy::findOrFail($request->pharmacy_id);
        // return view("pages.phar")
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
    public function destroy(Request $request)
    {
        $pharmacy =Pharmacy::findOrFail($request->pharmacy_id);
        $pharmacy->delete();
        notify()->success('Pharmacy Deleted Successfully !');

        return redirect()->route("pharmacies.index");
    }
}
