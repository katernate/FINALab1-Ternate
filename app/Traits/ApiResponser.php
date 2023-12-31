<?php

namespace App\Traits;

use Illuminate\Http\Response;

trait ApiResponser{
    // build success responser
    // success reponser
    public function successResponse($data, $code = Response::HTTP_OK)
    {
        return response()->json(['data' => $data, 'site' => 1], $code);
    }
    public function errorResponse($message, $code)
    {
        return response()->json(['error' => $message, "code" => $code, 'site' => 1], $code);
    }
}
