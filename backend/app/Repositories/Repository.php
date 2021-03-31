<?php
namespace App\Repositories;

use Illuminate\Contracts\Database\ModelIdentifier;
use stdClass;

interface RepositoryBase {
    public function create(stdClass $model);
}

