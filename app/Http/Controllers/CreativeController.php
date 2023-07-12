<?php

namespace App\Http\Controllers;

use App\Http\Resources\Creative\CreativeCollection;
use App\Models\Creative;
use Illuminate\Http\Request;

class CreativeController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $creatives = Creative::all();

    return jsend_success(new CreativeCollection($creatives));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $created = Creative::create($request->all());

    return jsend_success($created);
  }

  /**
   * Display the specified resource.
   */
  public function show(Creative $creative)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Creative $creative)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Creative $creative)
  {
    //
  }
}
