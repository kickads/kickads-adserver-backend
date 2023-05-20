<?php

namespace App\Http\Controllers;

use App\Models\Advertiser;
use App\Repositories\AdvertiserRepository;
use Illuminate\Http\Request;

class AdvertiserController extends Controller
{
  private AdvertiserRepository $advertiserRepository;

  public function __construct(AdvertiserRepository $advertiserRepository)
  {
    $this->advertiserRepository = $advertiserRepository;
  }

  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $advertisers = $this->advertiserRepository->all();

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
    return response()->json($this->advertiserRepository->find($advertiser));
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
    $this->advertiserRepository->delete($advertiser);

    return response()->json([
      'status' => 'success',
      'data'   => $advertiser
    ]);
  }
}
