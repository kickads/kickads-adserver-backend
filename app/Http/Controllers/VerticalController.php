<?php

namespace App\Http\Controllers;

use App\Models\Vertical;
use App\Repositories\VerticalRepository;
use Illuminate\Http\Request;

class VerticalController extends Controller
{
  private VerticalRepository $verticalRepository;

  public function __construct(VerticalRepository $verticalRepository)
  {
    $this->verticalRepository = $verticalRepository;
  }

  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $verticals = $this->verticalRepository->all();

    return response()->json($verticals);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $verticalCreated = $this->verticalRepository->create($request);

    return jsend_success($verticalCreated);
  }

  /**
   * Display the specified resource.
   */
  public function show(Vertical $vertical)
  {
    return jsend_success($this->verticalRepository->find($vertical));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Vertical $vertical)
  {
    $verticalUpdated = $this->verticalRepository->update($request, $vertical);

    return jsend_success($verticalUpdated);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Vertical $vertical)
  {
    $this->verticalRepository->delete($vertical);

    return jsend_success($vertical);
  }
}
