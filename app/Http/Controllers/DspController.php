<?php

namespace App\Http\Controllers;

use App\Models\Dsp;
use App\Repositories\DspRepository;
use Illuminate\Http\Request;

class DspController extends Controller
{
  private DspRepository $dspRepository;

  public function __construct(DspRepository $dspRepository)
  {
    $this->dspRepository = $dspRepository;
  }

  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $dsps = $this->dspRepository->all();

    return response()->json($dsps);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $dspCreated = $this->dspRepository->create($request);

    return jsend_success($dspCreated);
  }

  /**
   * Display the specified resource.
   */
  public function show(Dsp $dsp)
  {
    return jsend_success($this->dspRepository->find($dsp));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Dsp $dsp)
  {
    $dspUpdated = $this->dspRepository->update($request, $dsp);

    return jsend_success($dspUpdated);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Dsp $dsp)
  {
    $this->dspRepository->delete($dsp);

    return jsend_success($dsp);
  }
}
