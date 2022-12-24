<?php

namespace Sha\GetLastFiles;

use Illuminate\Support\Facades\Facade;

class GetLastFilesFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'getlastfiles';
    }
}