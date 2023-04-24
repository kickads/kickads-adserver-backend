<?php

namespace App\Http\Controllers;

use App\Models\Advertiser;
use Illuminate\Http\Request;

class AdvertiserController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $advertisers = Advertiser::all();

    return response()->json($advertisers);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   */
  public function show(Advertiser $advertiser)
  {
    return response()->json($advertiser);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Advertiser $advertiser)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Advertiser $advertiser)
  {
    $advertiser->delete();

    return response()->json([
      'status' => 'success',
      'data'   => $advertiser
    ]);
  }
}
