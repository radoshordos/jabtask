<?php

namespace Core\Repositories;

use Core\Models\JabtaskUsers;
use Core\Repositories\Base\BaseRepository;

class JabtaskUsersRepository extends BaseRepository implements JabtaskUsersRepositoryContract
{
    public function __construct(JabtaskUsers $model)
    {
        $this->model = $model;
    }
}