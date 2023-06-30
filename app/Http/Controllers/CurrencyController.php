<?php

namespace App\Http\Controllers;

use App\Http\Resources\Currency\CurrencyCollection;
use App\Http\Resources\Currency\CurrencyResource;
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

    return jsend_success(new CurrencyCollection($currencies));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $currencyCreated = $this->currencyRepository->create($request);

    return jsend_success($currencyCreated);
  }

  /**
   * Display the specified resource.
   */
  public function show(Currency $currency)
  {
    $currency = $this->currencyRepository->find($currency);
    return jsend_success(new CurrencyResource($currency));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Currency $currency)
  {
    $currencyUpdated = $this->currencyRepository->update($request, $currency);

    return jsend_success($currencyUpdated);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Currency $currency)
  {
    $this->currencyRepository->delete($currency);

    return jsend_success($currency);
  }
}
