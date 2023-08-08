<?php

namespace App\Http\Controllers;

use App\Http\Resources\PurchaseModel\PurchaseModelCollection;
use App\Models\PurchaseModel;
use App\Repositories\PurchaseModelRepository;
use Illuminate\Http\Request;

class PurchaseModelController extends Controller
{
  public function __construct(public PurchaseModelRepository $purchaseModelRepository)
  {
  }

  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $purchase_models = $this->purchaseModelRepository->all();

    return jsend_success(new PurchaseModelCollection($purchase_models));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   */
  public function show(PurchaseModel $purchaseModel)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, PurchaseModel $purchaseModel)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(PurchaseModel $purchaseModel)
  {
    //
  }
}
