<?php

namespace Core\Repositories;

use Core\Models\JabtaskEvents;
use Core\Repositories\Base\BaseRepository;

class JabtaskEventsRepository extends BaseRepository implements JabtaskEventsRepositoryContract
{
    public function __construct(JabtaskEvents $model)
    {
        $this->model = $model;
    }
}