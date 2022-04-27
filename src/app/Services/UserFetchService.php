<?php

namespace App\Services;

use App\Models\User;

class UserFetchService
{
    public function handle(int $id)
    {
        return User::findOrFail($id);
    }
}
