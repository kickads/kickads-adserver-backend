<?php

namespace App\Http\Controllers;

use App\Models\DealPerformance;
use App\Repositories\DealPerformanceRepository;
use Illuminate\Http\Request;

class DealPerformanceController extends Controller
{
  private DealPerformanceRepository $dealPerformanceRepository;

  public function __construct(DealPerformanceRepository $dealPerformanceRepository)
  {
    $this->dealPerformanceRepository = $dealPerformanceRepository;
  }

  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $deals = $this->dealPerformanceRepository->all();

    return response()->json($deals);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $dealCreated = $this->dealPerformanceRepository->create($request);

    return response()->json($dealCreated);
  }

  /**
   * Display the specified resource.
   */
  public function show(DealPerformance $dealsPerformance)
  {
    return response()->json($this->dealPerformanceRepository->find($dealsPerformance));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, DealPerformance $dealsPerformance)
  {
    $dealUpdated = $this->dealPerformanceRepository->update($request, $dealsPerformance);

    return response()->json($dealUpdated);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(DealPerformance $dealsPerformance)
  {
    $this->dealPerformanceRepository->delete($dealsPerformance);

    return response()->json([
      'status' => 'success',
      'data'   => $dealsPerformance
    ]);
  }
}