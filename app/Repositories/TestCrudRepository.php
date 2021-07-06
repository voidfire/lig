<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\TestCrud;

class TestCrudRepository extends ModuleRepository
{
    use HandleSlugs;

    public function __construct(TestCrud $model)
    {
        $this->model = $model;
    }
}
