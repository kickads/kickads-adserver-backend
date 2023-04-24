<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $countries = Country::all();

    return response()->json($countries);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $countries = Country::create([
      'name' => $request->name
    ]);

    return response()->json($countries);
  }

  /**
   * Display the specified resource.
   */
  public function show(Country $country)
  {
    return response()->json($country);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Country $country)
  {
    $oldCountry = Country::find($country->id);
    $oldCountry->name = $request->name;
    $oldCountry->save();

    return response()->json($oldCountry);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Country $country)
  {
    $country->delete();

    return response()->json([
      'status' => 'success',
      'data'   => $country
    ]);
  }
}
