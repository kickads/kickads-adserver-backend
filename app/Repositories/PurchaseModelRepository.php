<?php

namespace App\Repositories;

use App\Models\PurchaseModel;

class PurchaseModelRepository extends CrudRepository
{
  public function __construct(PurchaseModel $purchaseModel)
  {
    parent::__construct($purchaseModel);
  }
}