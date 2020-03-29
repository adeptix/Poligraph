<?php


namespace App\Console\Commands;

use Illuminate\Foundation\Console\ModelMakeCommand as Command;

//class to be changed model directory

class ModelMakeCommand extends Command
{
    protected function getDefaultNamespace($rootNamespace)
    {
        return "{$rootNamespace}\Models";
    }
}
