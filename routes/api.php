<?php

use App\Events\ClickIncrement;
use App\Http\Controllers\AdvertiserController;
use App\Http\Controllers\BusinessModelController;
use App\Http\Controllers\CampaignCategoryController;
use App\Http\Controllers\ClickController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CreativeController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\DealBrandingController;
use App\Http\Controllers\DealController;
use App\Http\Controllers\DealPerformanceController;
use App\Http\Controllers\DealPmpController;
use App\Http\Controllers\DspController;
use App\Http\Controllers\EntityController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\InteractionController;
use App\Http\Controllers\IntersticialController;
use App\Http\Controllers\IosController;
use App\Http\Controllers\PriorityController;
use App\Http\Controllers\PusherController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VerticalController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Pruebas con React
Route::controller(AuthController::class)->prefix('auth')->group(function () {
  Route::post('login', 'login');
  Route::post('logout', 'logout')->middleware('auth:sanctum');
});

Route::apiResource('advertisers', AdvertiserController::class);
Route::apiResource('deals', DealController::class); // TODO: Examinar su existencia
Route::apiResource('deals-branding', DealBrandingController::class);
Route::apiResource('deals-performance', DealPerformanceController::class);
Route::apiResource('deals-pmp', DealPmpController::class);
Route::apiResource('verticals', VerticalController::class);
Route::apiResource('dsps', DspController::class);
Route::apiResource('ios', IosController::class);
Route::apiResource('campaign-categories', CampaignCategoryController::class);

Route::middleware(['auth:sanctum', 'role:admin'])->group(function () {
  Route::apiResource('users', UserController::class);
  Route::apiResource('business-models', BusinessModelController::class);
  Route::apiResource('companies', CompanyController::class);
  Route::apiResource('countries', CountryController::class);
  Route::apiResource('currencies', CurrencyController::class);
  Route::apiResource('entities', EntityController::class);
  Route::apiResource('priorities', PriorityController::class);
  Route::apiResource('roles', RoleController::class);
});

Route::middleware(['auth:sanctum'])->group(function () {
  Route::get('user', [UserController::class, 'getAuthUser']);
  Route::get('currency-acronyms', [CurrencyController::class, 'getAcronymNames']);
});

Route::apiResource('intersticials', IntersticialController::class);
Route::apiResource('creatives', CreativeController::class);
Route::apiResource('clients', ClientController::class);

Route::apiResource('clicks', ClickController::class);
Route::patch('clicks/{intersticialId}/{clickName}', [ClickController::class, 'incrementClick']);

Route::apiResource('interactions', InteractionController::class);
Route::patch('interactions/{intersticialId}/{interactionName}', [InteractionController::class, 'incrementInteraction']);

Route::get('/', [PusherController::class, 'index']);
Route::post('/broadcast', [PusherController::class, 'broadcast']);
Route::post('/receive', [PusherController::class, 'receive']);