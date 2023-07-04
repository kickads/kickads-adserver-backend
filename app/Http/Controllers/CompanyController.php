<?php

namespace App\Http\Controllers;

use App\Http\Requests\Company\CompanyStoreRequest;
use App\Http\Requests\Company\CompanyUpdateRequest;
use App\Http\Resources\Companies\CompaniesCollection;
use App\Http\Resources\Companies\CompaniesResource;
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

    return jsend_success(new CompaniesCollection($companies));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(CompanyStoreRequest $request)
  {
    $companyCreated = $this->companyRepository->create($request);

    return jsend_success($companyCreated);
  }

  /**
   * Display the specified resource.
   */
  public function show(Company $company)
  {
    $country = $this->companyRepository->find($company);
    return jsend_success(new CompaniesResource($country));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(CompanyUpdateRequest $request, Company $company)
  {
    $companyUpdated = $this->companyRepository->update($request, $company);

    return jsend_success($companyUpdated);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Company $company)
  {
    $this->companyRepository->delete($company);

    return jsend_success($company);
  }
}
