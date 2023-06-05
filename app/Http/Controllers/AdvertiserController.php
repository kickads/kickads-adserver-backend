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

    return jsend_success($advertisers);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $advertiserCreated = $this->advertiserRepository->create($request);

    return jsend_success($advertiserCreated);
  }

  /**
   * Display the specified resource.
   */
  public function show(Advertiser $advertiser)
  {
    return jsend_success($this->advertiserRepository->find($advertiser));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Advertiser $advertiser)
  {
    $advertiserUpdated = $this->advertiserRepository->update($request, $advertiser);

    return jsend_success($advertiserUpdated);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Advertiser $advertiser)
  {
    $this->advertiserRepository->delete($advertiser);

    return jsend_success($advertiser);
  }
}
