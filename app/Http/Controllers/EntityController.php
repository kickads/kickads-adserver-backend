<?php

namespace App\Http\Controllers;

use App\Models\Entity;
use App\Repositories\EntityRepository;
use Illuminate\Http\Request;

class EntityController extends Controller
{
  private EntityRepository $entityRepository;

  public function __construct(EntityRepository $entityRepository)
  {
    $this->entityRepository = $entityRepository;
  }

  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $entities = $this->entityRepository->all();

    return response()->json($entities);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $entityCreated = $this->entityRepository->create($request);

    return response()->json($entityCreated);
  }

  /**
   * Display the specified resource.
   */
  public function show(Entity $entity)
  {
    return response()->json($this->entityRepository->find($entity));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Entity $entity)
  {
    $entityUpdated = $this->entityRepository->update($request, $entity);

    return response()->json($entityUpdated);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Entity $entity)
  {
    $this->entityRepository->delete($entity);

    return response()->json([
      'status' => 'success',
      'data'   => $entity
    ]);
  }
}
