<?php

namespace App\Http\Controllers;

use App\Http\Resources\Entity\EntityCollection;
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

    return jsend_success(new EntityCollection($entities));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $entityCreated = $this->entityRepository->create($request);

    return jsend_success($entityCreated);
  }

  /**
   * Display the specified resource.
   */
  public function show(Entity $entity)
  {
    return jsend_success($this->entityRepository->find($entity));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Entity $entity)
  {
    $entityUpdated = $this->entityRepository->update($request, $entity);

    return jsend_success($entityUpdated);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Entity $entity)
  {
    $this->entityRepository->delete($entity);

    return jsend_success($entity);
  }
}
