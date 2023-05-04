<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\repositories\CountryRepository;
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

    return response()->json($countries);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $countries = $this->countryRepository->create($request);

    return response()->json($countries);
  }

  /**
   * Display the specified resource.
   */
  public function show(Country $country)
  {
    return response()->json($this->countryRepository->find($country));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Country $country)
  {
    $oldCountry = $this->countryRepository->update($request, $country);

    return response()->json($oldCountry);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Country $country)
  {
    $this->countryRepository->delete($country);

    return response()->json([
      'status' => 'success',
      'data'   => $country
    ]);
  }
}
