<?php

namespace App\Http\Controllers;

use App\Models\DealBranding;
use App\Repositories\DealBrandingRepository;
use Illuminate\Http\Request;

class DealBrandingController extends Controller
{
  private DealBrandingRepository $dealBrandingRepository;

  public function __construct(DealBrandingRepository $dealBrandingRepository)
  {
    $this->dealBrandingRepository = $dealBrandingRepository;
  }

  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $deals = $this->dealBrandingRepository->all();

    return response()->json($deals);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $deal = $this->dealBrandingRepository->create($request);

    return response()->json($deal);
  }

  /**
   * Display the specified resource.
   */
  public function show(DealBranding $dealsBranding)
  {
    return response()->json($this->dealBrandingRepository->find($dealsBranding));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, DealBranding $dealsBranding)
  {
    $dealBrandingUpdated = $this->dealBrandingRepository->update($request, $dealsBranding);

    return response()->json($dealBrandingUpdated);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(DealBranding $dealsBranding)
  {
    $this->dealBrandingRepository->delete($dealsBranding);

    return response()->json([
      'status' => 'success',
      'data'   => $dealsBranding
    ]);
  }
}
