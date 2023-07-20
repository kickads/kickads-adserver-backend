<?php

namespace App\Http\Controllers;

use App\Http\Resources\Intersticial\IntersticialCollection;
use App\Models\Click;
use App\Models\Interaction;
use App\Models\Intersticial;
use Illuminate\Http\Request;

class IntersticialController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $intersticials = Intersticial::all();

    return jsend_success(new IntersticialCollection($intersticials));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $intersticialCreated = Intersticial::create($request->intersticial);

    $clicks = $request->clicks;

    if (count($clicks)) {
      foreach ($clicks as $click) {
        Click::create([
          'intersticial_id' => $intersticialCreated->id,
          'name'            => $click,
        ]);
      }
    }

    $interactions = $request->interactions;

    if (count($interactions)) {
      foreach ($interactions as $interaction) {
        Interaction::create([
          'intersticial_id' => $intersticialCreated->id,
          'name'            => $interaction,
        ]);
      }
    }

    return jsend_success($intersticialCreated);
  }

  /**
   * Display the specified resource.
   */
  public function show(Intersticial $intersticial)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Intersticial $intersticial)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Intersticial $intersticial)
  {
    //
  }
}
