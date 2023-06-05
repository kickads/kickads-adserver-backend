<?php

namespace App\Http\Controllers;

use App\Models\CampaignCategory;
use App\Repositories\CampaignCategoryRepository;
use Illuminate\Http\Request;

class CampaignCategoryController extends Controller
{
  private CampaignCategoryRepository $campaignCategoryRepository;

  public function __construct(CampaignCategoryRepository $campaignCategoryRepository)
  {
    $this->campaignCategoryRepository = $campaignCategoryRepository;
  }

  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $campaignCategories = $this->campaignCategoryRepository->all();

    return response()->json($campaignCategories);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $campaignCategoryCreated = $this->campaignCategoryRepository->create($request);

    return jsend_success($campaignCategoryCreated);
  }

  /**
   * Display the specified resource.
   */
  public function show(CampaignCategory $campaignCategory)
  {
    return jsend_success($this->campaignCategoryRepository->find($campaignCategory));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, CampaignCategory $campaignCategory)
  {
    $campaignCategoryUpdated = $this->campaignCategoryRepository->update($request, $campaignCategory);

    return jsend_success($campaignCategoryUpdated);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(CampaignCategory $campaignCategory)
  {
    $this->campaignCategoryRepository->delete($campaignCategory);

    return jsend_success($campaignCategory);
  }
}
