<?php

namespace App\Http\Controllers;

use App\Http\Requests\OpportunityBranding\OpportunityBrandingStoreRequest;
use App\Http\Resources\Opportunity\OpportunityBrandingCollection;
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

    return jsend_success(new OpportunityBrandingCollection($opportunities));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(OpportunityBrandingStoreRequest $request)
  {
    $opportunityBrandingCreated = $this->opportunityBrandingRepository->create($request);

    return jsend_success($opportunityBrandingCreated);
  }

  /**
   * Display the specified resource.
   */
  public function show(OpportunityBranding $opportunities_branding)
  {
    $opportunityBranding = $this->opportunityBrandingRepository->find($opportunities_branding);

    return jsend_success($opportunityBranding);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, OpportunityBranding $opportunities_branding)
  {
    $opportunityBrandingUpdated = $this->opportunityBrandingRepository->update($request, $opportunities_branding);

    return jsend_success($opportunityBrandingUpdated);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(OpportunityBranding $opportunities_branding)
  {
    $this->opportunityBrandingRepository->delete($opportunities_branding);

    return jsend_success($opportunities_branding);
  }
}
