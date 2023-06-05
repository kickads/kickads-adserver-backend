<?php

namespace App\Http\Controllers;

use App\Models\Ios;
use App\Repositories\IosRepository;
use Illuminate\Http\Request;

class IosController extends Controller
{
  private IosRepository $iosRepository;

  public function __construct(IosRepository $iosRepository)
  {
    $this->iosRepository = $iosRepository;
  }

  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $ios = $this->iosRepository->all();

    return response()->json($ios);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $iosCreated = $this->iosRepository->create($request);

    return jsend_success($iosCreated);
  }

  /**
   * Display the specified resource.
   */
  public function show(Ios $ios)
  {
    return jsend_success($this->iosRepository->find($ios));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Ios $ios)
  {
    $iosUpdated = $this->iosRepository->update($request, $ios);

    return jsend_success($iosUpdated);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Ios $ios)
  {
    $this->iosRepository->delete($ios);

    return jsend_success($ios);
  }
}
