<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Repositories\CurrencyRepository;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
  private CurrencyRepository $currencyRepository;

  public function __construct(CurrencyRepository $currencyRepository)
  {
    $this->currencyRepository = $currencyRepository;
  }

  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $currencies = $this->currencyRepository->all();

    return response()->json($currencies);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $currencyCreated = $this->currencyRepository->create($request);

    return response()->json($currencyCreated);
  }

  /**
   * Display the specified resource.
   */
  public function show(Currency $currency)
  {
    return response()->json($this->currencyRepository->find($currency));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Currency $currency)
  {
    $currencyUpdated = $this->currencyRepository->update($request, $currency);

    return response()->json($currencyUpdated);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Currency $currency)
  {
    $this->currencyRepository->delete($currency);

    return response()->json([
      'status' => 'success',
      'data'   => $currency
    ]);
  }
}
