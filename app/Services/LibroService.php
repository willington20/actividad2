<?php

namespace App\Services;

use App\Models\LibroYCosita;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class LibroService implements LibroServiceInterface
{
    public function all()
    {
        return LibroYCosita::all();
    }

    public function find(int $id)
    {
        return LibroYCosita::findOrFail($id);
    }

    public function create(array $data)
    {
        return LibroYCosita::create($data);
    }

    public function update(int $id, array $data)
    {
        $model = LibroYCosita::findOrFail($id);
        $model->update($data);
        return $model;
    }

    public function delete(int $id): bool
    {
        $model = LibroYCosita::findOrFail($id);
        return (bool) $model->delete();
    }
}
