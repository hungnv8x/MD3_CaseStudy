<?php

namespace App\Repositories;


use App\Repositories\Impl\BaseInterface;

abstract class BaseRepository implements BaseInterface
{
    public $model;
    public function __construct()
    {
        $this->model = $this->getModel();
    }
    abstract public function getModel();

    public function getAll()
    {
        return $this->model::paginate(5);
    }

    public function deleteById($id)
    {
        $this->model::destroy($id);
    }

    public function getById($id)
    {
        return $this->model::findOrFail($id);
    }
}
