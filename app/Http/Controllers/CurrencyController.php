<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $currencies = Currency::all();

    return response()->json($currencies);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $currency = Currency::create([
      'value' => $request->value
    ]);

    return response()->json($currency);
  }

  /**
   * Display the specified resource.
   */
  public function show(Currency $currency)
  {
    return response()->json($currency);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Currency $currency)
  {
    $oldCurrency = Currency::class::find($currency->id);
    $oldCurrency->value = $request->value;
    $oldCurrency->save();

    return response()->json($oldCurrency);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Currency $currency)
  {
    $currency->delete();

    return response()->json([
      'status' => 'success',
      'data'   => $currency
    ]);
  }
}
