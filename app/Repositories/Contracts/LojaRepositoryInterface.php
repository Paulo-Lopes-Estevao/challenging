<?php

namespace App\Repositories\Contracts;

interface LojaRepositoryInterface
{
    public function all();
    public function find(int $id);
    public function create(array $fields);
    public function update(array $fields, int $id);
}