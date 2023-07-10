<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $created = Client::create($request->all());

    return jsend_success($created);
  }

  /**
   * Display the specified resource.
   */
  public function show(Client $client)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Client $client)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Client $client)
  {
    //
  }
}