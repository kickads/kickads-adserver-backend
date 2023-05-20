<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Repositories\CompanyRepository;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
  private CompanyRepository $companyRepository;

  public function __construct(CompanyRepository $companyRepository)
  {
    $this->companyRepository = $companyRepository;
  }

  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $companies = $this->companyRepository->all();

    return response()->json($companies);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $company = $this->companyRepository->create($request);

    return response()->json($company);
  }

  /**
   * Display the specified resource.
   */
  public function show(Company $company)
  {
    return response()->json($this->companyRepository->find($company));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Company $company)
  {
    $oldCompany = $this->companyRepository->update($request, $company);

    return response()->json($oldCompany);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Company $company)
  {
    $this->companyRepository->delete($company);

    return response()->json([
      'status' => 'success',
      'data'   => $company
    ]);
  }
}
