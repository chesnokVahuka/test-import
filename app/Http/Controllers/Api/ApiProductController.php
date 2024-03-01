<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApiImportRequest;
use App\Services\Import\ProductImportService;
use App\Validators\ApiValidators\ImportValidator;


class ApiProductController extends Controller
{
    public function import(ApiImportRequest $request): \Illuminate\Http\JsonResponse
    {
        $validator = new ImportValidator();
        if (!$validator->validate($request->file('payload'))){
            return response()->json(
                ['data' => [
                    'status' => 'error',
                    'description' => $validator->getError()
                ]],
                422
            );
        }

        $service = new ProductImportService();

        $result = $service->import($request->file('payload'));

        if (empty($result)){
            return response()->json(
                ['data' => [
                    'status' => 'success',
                    'description' => 'import was fully successfully'
                ]],
                200
            );
        }

        return response()->json(
            ['data' => [
                'status' => 'partial success',
                'description' => 'import was partially successfull',
                'errors' => $result
            ]],
            200
        );
    }
}
