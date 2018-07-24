<?php

namespace Core\Services;

use Core\Repositories\JabtaskUsersRepositoryContract;
use Core\Services\Base\BaseService;

class JabtaskUsersService extends BaseService implements JabtaskUsersServiceContract
{
    public function __construct(JabtaskUsersRepositoryContract $repository)
    {
        return $this->repository = $repository;
    }
}