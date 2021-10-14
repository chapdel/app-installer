<?php

namespace Chapdel\Installer;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Chapdel\Installer\Installer
 */
class InstallerFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'app-installer';
    }
}
