<?php

namespace App\Traits\Filters;


trait UserFilterQuery
{

  public function filter($builder)
  {
    if (request('username') != '') {
      $builder->where('username', 'LIKE', '%' . request('username') . '%');
    }

    if (request('fullname') != '') {
      $builder->where('fullname', 'LIKE', '%' . request('fullname') . '%');
    }

    return $builder;
  }
}
