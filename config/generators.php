<?php

return [
    /*
     * Services that should be applied by make:entity as default. The classes for 'service'
     * have to implement Webfactor\Laravel\Generators\Contracts\MakeServiceInterface.
     */
    'services' => [
        Webfactor\Laravel\Generators\Services\MakeMigrationService::class,
        /*Webfactor\Laravel\Generators\Services\MakeLanguageService::class,
        Webfactor\Laravel\Generators\Services\MakeBackpackCrudModelService::class,
        Webfactor\Laravel\Generators\Services\MakeBackpackCrudControllerService::class,
        Webfactor\Laravel\Generators\Services\MakeBackpackCrudRequestService::class,
        Webfactor\Laravel\Generators\Services\MakeFactoryService::class,
        Webfactor\Laravel\Generators\Services\MakeSeederService::class,
        Webfactor\Laravel\Generators\Services\MakeRouteService::class,*/
    ],
];
