<?php

namespace App\Repositories;

use App\Models\CampaignCategory;

class CampaignCategoryRepository extends CrudRepository
{
  public function __construct(CampaignCategory $campaignCategory)
  {
    parent::__construct($campaignCategory);
  }
}