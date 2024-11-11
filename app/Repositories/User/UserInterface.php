<?php

namespace App\Repositories\User;


interface UserInterface
{
  public function list();

  public function storeOrUpdate($data, $user = null);
}
