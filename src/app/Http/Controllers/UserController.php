<?php

namespace App\Http\Controllers;

use App\Services\UserFetchService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function fetch(Request $request, int $id, UserFetchService $service)
    {
        return $service->handle($id);
    }
}
