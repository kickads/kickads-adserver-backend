<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\repositories\CurrencyRepository;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
  private CurrencyRepository $model;

  public function __construct(CurrencyRepository $currencyRepository)
  {
    $this->model = $currencyRepository;
  }

  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $currencies = $this->model->all();

    return response()->json($currencies);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $currency = $this->model->create($request);

    return response()->json($currency);
  }

  /**
   * Display the specified resource.
   */
  public function show(Currency $currency)
  {
    return response()->json($this->model->find($currency));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Currency $currency)
  {
    $oldCurrency = $this->model->update($request, $currency);

    return response()->json($oldCurrency);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Currency $currency)
  {
    $this->model->delete($currency);

    return response()->json([
      'status' => 'success',
      'data'   => $currency
    ]);
  }
}
