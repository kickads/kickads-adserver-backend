<?php

namespace App\Http\Controllers;

use App\Http\Resources\Action\ActionCollection;
use App\Models\Action;
use App\Repositories\ActionRepository;
use Illuminate\Http\Request;

class ActionController extends Controller
{
  public function __construct(public ActionRepository $actionRepository)
  {
  }

  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $actions = $this->actionRepository->all();

    return jsend_success(new ActionCollection($actions));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   */
  public function show(Action $action)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Action $action)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Action $action)
  {
    //
  }
}
