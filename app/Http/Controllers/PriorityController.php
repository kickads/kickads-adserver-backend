<?php

namespace App\Http\Controllers;

use App\Http\Requests\Priority\PriorityStoreRequest;
use App\Http\Requests\Priority\PriorityUpdateRequest;
use App\Http\Resources\Priority\PriorityCollection;
use App\Http\Resources\Priority\PriorityResource;
use App\Models\Priority;
use App\Repositories\PriorityRepository;
use Illuminate\Http\Request;

class PriorityController extends Controller
{
  private PriorityRepository $priorityRepository;

  public function __construct(PriorityRepository $priorityRepository)
  {
    $this->priorityRepository = $priorityRepository;
  }

  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $priorities = $this->priorityRepository->all();

    return jsend_success(new PriorityCollection($priorities));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(PriorityStoreRequest $request)
  {
    $priorityCreated = $this->priorityRepository->create($request);

    return jsend_success($priorityCreated);
  }

  /**
   * Display the specified resource.
   */
  public function show(Priority $priority)
  {
    $priority = $this->priorityRepository->find($priority);
    return jsend_success(new PriorityResource($priority));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(PriorityUpdateRequest $request, Priority $priority)
  {
    $priorityUpdated = $this->priorityRepository->update($request, $priority);

    return jsend_success($priorityUpdated);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Priority $priority)
  {
    $this->priorityRepository->delete($priority);

    return jsend_success($priority);
  }
}
