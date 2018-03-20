<?php

namespace Webfactor\Laravel\Generators\Services;

use Webfactor\Laravel\Generators\Contracts\MakeServiceAbstract;
use Webfactor\Laravel\Generators\Contracts\MakeServiceInterface;

class MakeBackpackCrudModelService extends MakeServiceAbstract implements MakeServiceInterface
{
    public function make()
    {
        $this->command->call('make:crud-model', [
            'name' => $this->getName($this->command->entity),
        ]);
    }

    public function getName(string $entity): string
    {
        return ucfirst($entity);
    }
}
