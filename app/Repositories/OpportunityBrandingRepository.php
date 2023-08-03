<?php

namespace App\Repositories;

use App\Models\OpportunityBranding;

class OpportunityBrandingRepository extends CrudRepository
{
  public function __construct(OpportunityBranding $opportunityBranding)
  {
    parent::__construct($opportunityBranding);
  }
}