<?php

namespace App\Http\Controllers;

use App\Models\DealPmp;
use App\Repositories\DealPmpRepository;
use Illuminate\Http\Request;

class DealPmpController extends Controller
{
  private DealPmpRepository $dealPmpRepository;

  public function __construct(DealPmpRepository $dealPmpRepository)
  {
    $this->dealPmpRepository = $dealPmpRepository;
  }

  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $deals = $this->dealPmpRepository->all();

    return jsend_success($deals);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $dealCreated = $this->dealPmpRepository->create($request);

    return jsend_success($dealCreated);
  }

  /**
   * Display the specified resource.
   */
  public function show(DealPmp $dealsPmp)
  {
    return jsend_success($this->dealPmpRepository->find($dealsPmp));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, DealPmp $dealsPmp)
  {
    $dealUpdated = $this->dealPmpRepository->update($request, $dealsPmp);

    return jsend_success($dealUpdated);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(DealPmp $dealsPmp)
  {
    $this->dealPmpRepository->delete($dealsPmp);

    return jsend_success($dealsPmp);
  }
}
