<?php

namespace App\Http\Controllers;

use App\Models\OpportunityBranding;
use App\Repositories\OpportunityBrandingRepository;
use Illuminate\Http\Request;

class OpportunityBrandingController extends Controller
{
  public function __construct(public OpportunityBrandingRepository $opportunityBrandingRepository)
  {
  }

  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $opportunities = $this->opportunityBrandingRepository->all();

    return jsend_success($opportunities);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    return jsend_success($request->all());
    $opportunityBrandingCreated = $this->opportunityBrandingRepository->create($request);

    return jsend_success($opportunityBrandingCreated);
  }

  /**
   * Display the specified resource.
   */
  public function show(OpportunityBranding $opportunityBranding)
  {
    $opportunityBranding = $this->opportunityBrandingRepository->find($opportunityBranding);

    jsend_success($opportunityBranding);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, OpportunityBranding $opportunityBranding)
  {
    $opportunityBrandingUpdated = $this->opportunityBrandingRepository->update($request, $opportunityBranding);

    return jsend_success($opportunityBrandingUpdated);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(OpportunityBranding $opportunityBranding)
  {
    $this->opportunityBrandingRepository->delete($opportunityBranding);

    return jsend_success($opportunityBranding);
  }
}
