<?php

namespace AGSystems\LumenMake\Commands;

use Illuminate\Console\GeneratorCommand;

class EventMakeCommand extends GeneratorCommand
{
    /**
     * @var string
     */
    protected $name = 'make:event';

    /**
     * @var string
     */
    protected $description = 'Make a new Event class.';

    protected $type = 'Event';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__.'/stubs/event.stub';
    }

    protected function getDefaultNamespace($namespace)
    {
        return $namespace.'\Events';
    }
}
