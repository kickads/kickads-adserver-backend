<?php

namespace App\Http\Controllers;

use App\Http\Resources\Device\DeviceCollection;
use App\Models\Device;
use App\Repositories\DeviceRepository;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
  public function __construct(public DeviceRepository $deviceRepository)
  {
  }

  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $devices = $this->deviceRepository->all();

    return jsend_success(new DeviceCollection($devices));
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
  public function show(Device $device)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Device $device)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Device $device)
  {
    //
  }
}
