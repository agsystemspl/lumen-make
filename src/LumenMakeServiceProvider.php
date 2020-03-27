<?php

namespace AGSystems\LumenMake;

use Illuminate\Support\ServiceProvider;
use AGSystems\LumenMake\Commands\JobMakeCommand;
use AGSystems\LumenMake\Commands\ConsoleMakeCommand;
use AGSystems\LumenMake\Commands\ControllerMakeCommand;
use AGSystems\LumenMake\Commands\ModelMakeCommand;
use AGSystems\LumenMake\Commands\MiddlewareMakeCommand;
use AGSystems\LumenMake\Commands\ExceptionMakeCommand;
use AGSystems\LumenMake\Commands\RequestMakeCommand;

class LumenMakeServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->commands(JobMakeCommand::class);
        $this->commands(ConsoleMakeCommand::class);
        $this->commands(ControllerMakeCommand::class);
        $this->commands(ModelMakeCommand::class);
        $this->commands(MiddlewareMakeCommand::class);
        $this->commands(RequestMakeCommand::class);
        $this->commands(ExceptionMakeCommand::class);
    }
}
