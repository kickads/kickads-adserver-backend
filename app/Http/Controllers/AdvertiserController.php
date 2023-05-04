<?php

namespace App\Http\Controllers;

use App\Models\Advertiser;
use App\repositories\AdvertiserRepository;
use Illuminate\Http\Request;

class AdvertiserController extends Controller
{
  private AdvertiserRepository $model;

  public function __construct(AdvertiserRepository $advertiserRepository)
  {
    $this->model = $advertiserRepository;
  }

  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $advertisers = $this->model->all();

    return response()->json($advertisers);
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
  public function show(Advertiser $advertiser)
  {
    return response()->json($this->model->find($advertiser));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Advertiser $advertiser)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Advertiser $advertiser)
  {
    $this->model->delete($advertiser);

    return response()->json([
      'status' => 'success',
      'data'   => $advertiser
    ]);
  }
}
