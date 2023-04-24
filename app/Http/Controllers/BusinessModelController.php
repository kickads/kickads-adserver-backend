<?php

namespace App\Http\Controllers;

use App\Models\BusinessModel;
use Illuminate\Http\Request;

class BusinessModelController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $businessModels = BusinessModel::all();

    return response()->json($businessModels);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $businessModels = BusinessModel::create([
      'name' => $request->name
    ]);

    return response()->json($businessModels);
  }

  /**
   * Display the specified resource.
   */
  public function show(BusinessModel $businessModel)
  {
    return response()->json($businessModel);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, BusinessModel $businessModel)
  {
    $oldBusinessModel = BusinessModel::find($businessModel->id);
    $oldBusinessModel->name = $request->name;
    $oldBusinessModel->save();

    return response()->json($oldBusinessModel);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(BusinessModel $businessModel)
  {
    $businessModel->delete();

    return response()->json([
      'status' => 'success',
      'data'   => $businessModel
    ]);
  }
}
