<?php

namespace Modules\Core\Interfaces;

interface CoreRepositoryInterface
{
    public function all($model);

    public function create($model, array $data);

    public function update($model, $id, array $data);

    public function delete($model, $id);

    /**
     * @param $condition , holds the db field
     * @param $query , hold the query value
     * @param $model
     * @return mixed
     */
    public function queryWithACondition($condition, $query, $model,array $with);

    public function show($model, $id);

    public function findTheFirstOne($condition, $query, $model,array $with);
    public function datatable($data,array $actions);
}
