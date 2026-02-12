<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLibroYCositaRequest;
use App\Http\Requests\UpdateLibroYCositaRequest;
use App\Services\LibroServiceInterface;
use Illuminate\Http\JsonResponse;

class LibroYCositaController extends Controller
{
    protected LibroServiceInterface $service;

    public function __construct(LibroServiceInterface $service)
    {
        $this->service = $service;
    }

    public function index(): JsonResponse
    {
        return response()->json($this->service->all());
    }

    public function store(StoreLibroYCositaRequest $request): JsonResponse
    {
        $created = $this->service->create($request->validated());
        return response()->json($created, 201);
    }

    public function show(int $id): JsonResponse
    {
        return response()->json($this->service->find($id));
    }

    public function update(UpdateLibroYCositaRequest $request, int $id): JsonResponse
    {
        return response()->json($this->service->update($id, $request->validated()));
    }

    public function destroy(int $id): JsonResponse
    {
        $this->service->delete($id);
        return response()->json(null, 204);
    }
}
