<?php

namespace App\Http\Controllers;

use App\Models\Click;
use Illuminate\Http\Request;

class ClickController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $created = Click::create($request->all());

    return jsend_success($created);
  }

  /**
   * Display the specified resource.
   */
  public function show(Click $click)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Click $click)
  {
    return jsend_success($click);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Click $click)
  {
    //
  }

  public function incrementClick(int $intersticialId, string $clickName)
  {
    $currentDay = now()->format('Y-m-d');

    $click = Click::where([
      ['intersticial_id', $intersticialId],
      ['name', $clickName]
    ])->first();

    if (!$click) return jsend_error('No encontrado');

    if ($click->intersticial->end_day < $currentDay) return jsend_error('Fuera de fecha');

    $click->increment('total', 1);

    return jsend_success($click);
  }

}
