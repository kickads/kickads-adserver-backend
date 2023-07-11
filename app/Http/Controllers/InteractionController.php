<?php

namespace App\Http\Controllers;

use App\Models\Interaction;
use Illuminate\Http\Request;

class InteractionController extends Controller
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
    $created = Interaction::create($request->all());

    return jsend_success($created);
  }

  /**
   * Display the specified resource.
   */
  public function show(Interaction $interaction)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Interaction $interaction)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Interaction $interaction)
  {
    //
  }

  public function incrementInteraction(int $intersticialId, string $interactionName)
  {
    $currentDay = now()->format('Y-m-d');

    $interaction = Interaction::where([
      ['intersticial_id', $intersticialId],
      ['name', $interactionName]
    ])->first();

    if (!$interaction) return jsend_error('No encontrado');

    if ($interaction->intersticial->end_day < $currentDay) return jsend_error('Fuera de fecha');

    $interaction->increment('total', 1);

    return jsend_success($interaction);
  }
}
