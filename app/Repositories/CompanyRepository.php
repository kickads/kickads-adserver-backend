<?php

namespace App\Repositories;

use App\Models\Company;

class CompanyRepository extends CrudRepository
{
  public function __construct(Company $company)
  {
    parent::__construct($company);
  }
}