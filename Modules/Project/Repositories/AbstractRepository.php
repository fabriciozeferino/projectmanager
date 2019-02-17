<?php

namespace Modules\Project\Http\Repositories;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

abstract class AbstractRepository extends Model //implements RepositoryInterface
{
    public function index()
    {
        return $this->paginate(5);
    }

    // Create a new record in the database
    public function store(array $data)
    {
        return $this->create($data);
    }

    // // update record in the database
    public function updateRow(array $data, $id)
    {
        $record = $this->find($id);
        return $record->update($data);
    }

    //remove record from the database
    public function deleteRow($id)
    {
        return $this->destroy($id);
    }

    // show the record with the given id
    public function show($id)
    {
        return $this->findOrFail($id);
    }
}
