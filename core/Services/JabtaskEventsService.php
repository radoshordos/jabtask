<?php

namespace Core\Services;

use Core\Repositories\JabtaskEventsRepositoryContract;
use Core\Services\Base\BaseService;

class JabtaskEventsService extends BaseService implements JabtaskEventsServiceContract
{
    public function __construct(JabtaskEventsRepositoryContract $repository)
    {
        return $this->repository = $repository;
    }
}