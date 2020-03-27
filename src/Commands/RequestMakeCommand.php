<?php

namespace AGSystems\LumenMake\Commands;

use Illuminate\Console\GeneratorCommand;

class RequestMakeCommand extends GeneratorCommand
{
    /**
     * @var string
     */
    protected $name = 'make:request';

    /**
     * @var string
     */
    protected $description = 'Make a new request.';

    protected $type = 'Request';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__ . '/stubs/request.stub';
    }

    protected function getDefaultNamespace($namespace)
    {
        return $namespace . '\Http\Requests';
    }
}
