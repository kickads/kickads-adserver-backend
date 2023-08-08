<?php

namespace App\Http\Controllers;

use App\Http\Resources\Format\FormatCollection;
use App\Models\Format;
use App\Repositories\FormatRepository;
use Illuminate\Http\Request;

class FormatController extends Controller
{
  public function __construct(public FormatRepository $formatRepository)
  {
  }

  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $formats = $this->formatRepository->all();

    return jsend_success(new FormatCollection($formats));
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
  public function show(Format $format)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Format $format)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Format $format)
  {
    //
  }
}
