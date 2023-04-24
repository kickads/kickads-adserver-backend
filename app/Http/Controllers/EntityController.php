<?php

namespace App\Http\Controllers;

use App\Models\Entity;
use Illuminate\Http\Request;

class EntityController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $entities = Entity::all();

    return response()->json($entities);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $entity = Entity::create([
      'name' => $request->name
    ]);

    return response()->json($entity);
  }

  /**
   * Display the specified resource.
   */
  public function show(Entity $entity)
  {
    return response()->json($entity);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Entity $entity)
  {
    $oldEntity = Entity::find($entity->id);
    $oldEntity->name = $request->name;
    $oldEntity->save();

    return response()->json($oldEntity);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Entity $entity)
  {
    $entity->delete();

    return response()->json([
      'status' => 'success',
      'data'   => $entity
    ]);
  }
}
