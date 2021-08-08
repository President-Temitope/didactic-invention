<?php

namespace Modules\User\Repositories;

use App\User;
use Modules\Core\Interfaces\CoreRepositoryInterface;
use Modules\User\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    protected $core = '';
    protected $model = '';

    public function __construct(CoreRepositoryInterface $core, User $model)
    {
        $this->core = $core;
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function all()
    {
        // TODO: Implement all() method.
        return $this->core->all($this->model);

    }

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
        // TODO: Implement create() method.
        return $this->core->create($this->model, $data);
    }

    /**
     * @param $id
     * @param array $data
     * @return mixed
     */
    public function update($id, array $data)
    {
        // TODO: Implement update() method.
        return $this->core->update($this->model, $id, $data);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        // TODO: Implement delete() method.
        return $this->core->delete($this->model, $id);
    }

    /**
     * @param $condition
     * @param $query
     * @return mixed
     */
    public function queryWithACondition($condition, $query,array $with)
    {
        // TODO: Implement queryWithACondition() method.
        return $this->core->queryWithACondition($condition, $query, $this->model,$with);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        // TODO: Implement show() method.
        return $this->core->show($this->model, $id);
    }

    public function find($condition, $query,array $with){
        return $this->core->findTheFirstOne($condition, $query, $this->model,$with);
    }
}
