<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserService
{

  public function storeOrUpdate($data, $user)
  {
    try {
      DB::beginTransaction();

      if (is_null($user)) {
        User::create($data);
      } else {

        if (empty($data['password'])) {
          unset($data['password']);
        }

        $user->update($data);
      }
      DB::commit();

      return ['success', 'User Created Success'];
    } catch (\Exception $e) {
      DB::rollBack();
      return ['error', 'Something wen\'t wrong!'];
    }
  }

  public function delete($user)
  {
    try {
      $user->delete();
      return ['success', 'User Deleted Success'];
    } catch (\Exception $e) {
      return ['error', 'Something wen\'t wrong!'];
    }
  }
}
