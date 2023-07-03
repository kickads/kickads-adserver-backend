<?php

namespace App\Http\Controllers;

use App\Http\Resources\BusinessModel\BusinessModelCollection;
use App\Http\Resources\BusinessModel\BusinessModelResource;
use App\Models\BusinessModel;
use App\Repositories\BusinessModelRepository;
use Illuminate\Http\Request;

class BusinessModelController extends Controller
{
  private BusinessModelRepository $businessModelRepository;

  public function __construct(BusinessModelRepository $businessModelRepository)
  {
    $this->businessModelRepository = $businessModelRepository;
  }

  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $businessModels = $this->businessModelRepository->all();

    return jsend_success(new BusinessModelCollection($businessModels));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $businessModelCreated = $this->businessModelRepository->create($request);

    return jsend_success($businessModelCreated);
  }

  /**
   * Display the specified resource.
   */
  public function show(BusinessModel $businessModel)
  {
    $businessModel = $this->businessModelRepository->find($businessModel);
    return jsend_success(new BusinessModelResource($businessModel));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, BusinessModel $businessModel)
  {
    $businessModelUpdated = $this->businessModelRepository->update($request, $businessModel);

    return jsend_success($businessModelUpdated);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(BusinessModel $businessModel)
  {
    $this->businessModelRepository->delete($businessModel);

    return jsend_success($businessModel);
  }
}
