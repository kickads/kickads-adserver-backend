<?php

namespace App\repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CrudRepository
{
  protected Model $model;

  public function __construct(Model $model)
  {
    $this->model = $model;
  }

  /**
   * Display a listing of the resource.
   */
  public function all()
  {
    return $this->model::all();
  }

  /**
   * Store a newly created resource in storage.
   */
  public function create(Request $request)
  {
    return $this->model::create($request->all());
  }

  /**
   * Display the specified resource.
   */
  public function find(Model $model)
  {
    return $model;
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Model $model)
  {
    $oldCurrency = $this->model::find($model->id);
    $oldCurrency->update($request->all());
    $oldCurrency->save();

    return $oldCurrency;
  }

  /**
   * Remove the specified resource from storage.
   */
  public function delete(Model $model)
  {
    $model->delete();

    return $model;
  }
}