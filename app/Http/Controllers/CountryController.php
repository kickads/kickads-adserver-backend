<?php

namespace App\Http\Controllers;

use App\Http\Resources\CountryCollection;
use App\Models\Country;
use App\Repositories\CountryRepository;
use Illuminate\Http\Request;

class CountryController extends Controller
{
  private CountryRepository $countryRepository;

  public function __construct(CountryRepository $countryRepository)
  {
    $this->countryRepository = $countryRepository;
  }

  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $countries = $this->countryRepository->all();

    return jsend_success(new CountryCollection($countries));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $countryCreated = $this->countryRepository->create($request);

    return jsend_success($countryCreated);
  }

  /**
   * Display the specified resource.
   */
  public function show(Country $country)
  {
    return jsend_success($this->countryRepository->find($country));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Country $country)
  {
    $countryUpdated = $this->countryRepository->update($request, $country);

    return jsend_success($countryUpdated);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Country $country)
  {
    $this->countryRepository->delete($country);

    return jsend_success($country);
  }
}
