<?php

namespace App\Http\Controllers;

use App\Events\PusherBroadcast;
use Illuminate\Http\Request;

class PusherController extends Controller
{
  public function index()
  {
    return jsend_success('index');
  }

  public function broadcast(Request $request)
  {
    broadcast(new PusherBroadcast($request->get('message')))->toOthers();
    return jsend_success([
      'message' => $request->get('message')
    ]);
  }

  public function receive(Request $request)
  {
    return jsend_success([
      'message' => $request->get('message')
    ]);
  }
}
