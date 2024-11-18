<?php

namespace App\Traits\Filters;


trait UserFilterQuery
{

  public function filter($builder)
  {

    $builder->when(request('username'), function ($q) {
      $q->where('username', 'LIKE', '%' . request('username') . '%');
    });

    $builder->when(request('fullname'), function ($q) {
      $q->where('fullname', 'LIKE', '%' . request('fullname') . '%');
    });

    return $builder;
  }
}
