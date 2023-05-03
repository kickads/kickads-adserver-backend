<?php

namespace App\Http\Controllers;

use App\Models\BusinessModel;
use App\repositories\BusinessModelRepository;
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

    return response()->json($businessModels);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $businessModels = $this->businessModelRepository->create($request);

    return response()->json($businessModels);
  }

  /**
   * Display the specified resource.
   */
  public function show(BusinessModel $businessModel)
  {
    return response()->json($this->businessModelRepository->find($businessModel));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, BusinessModel $businessModel)
  {
    $oldBusinessModel = $this->businessModelRepository->update($request, $businessModel);

    return response()->json($oldBusinessModel);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(BusinessModel $businessModel)
  {
    $this->businessModelRepository->delete($businessModel);

    return response()->json([
      'status' => 'success',
      'data'   => $businessModel
    ]);
  }
}
