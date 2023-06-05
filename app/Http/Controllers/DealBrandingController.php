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

    return jsend_success($deals);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $dealCreated = $this->dealBrandingRepository->create($request);

    return jsend_success($dealCreated);
  }

  /**
   * Display the specified resource.
   */
  public function show(DealBranding $dealsBranding)
  {
    return jsend_success($this->dealBrandingRepository->find($dealsBranding));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, DealBranding $dealsBranding)
  {
    $dealUpdated = $this->dealBrandingRepository->update($request, $dealsBranding);

    return jsend_success($dealUpdated);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(DealBranding $dealsBranding)
  {
    $this->dealBrandingRepository->delete($dealsBranding);

    return jsend_success($dealsBranding);
  }
}
