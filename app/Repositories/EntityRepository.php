<?php

namespace App\Repositories;

use App\Models\Entity;

class EntityRepository extends CrudRepository
{
  public function __construct(Entity $entity)
  {
    parent::__construct($entity);
  }
}