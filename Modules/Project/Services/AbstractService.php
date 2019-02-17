<?php

namespace Modules\Project\Http\Services;

use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Modules\Project\Http\Repositories\PermissionRepository;


abstract class AbstractService
{
    public function respondWithJson($data, $status)
    {
        return response()->json($data, $status, []);
        //return response()->json($data, $status, [], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    }


}
