<?php

namespace App\Http\Controllers;

use App\Models\Entity;
use App\repositories\EntityRepository;
use Illuminate\Http\Request;

class EntityController extends Controller
{
  private EntityRepository $model;

  public function __construct(EntityRepository $entityRepository)
  {
    $this->model = $entityRepository;
  }

  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $entities = $this->model->all();

    return response()->json($entities);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $entity = $this->model->create($request);

    return response()->json($entity);
  }

  /**
   * Display the specified resource.
   */
  public function show(Entity $entity)
  {
    return response()->json($this->model->find($entity));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Entity $entity)
  {
    $oldEntity = $this->model->update($request, $entity);

    return response()->json($oldEntity);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Entity $entity)
  {
    $this->model->delete($entity);

    return response()->json([
      'status' => 'success',
      'data'   => $entity
    ]);
  }
}
