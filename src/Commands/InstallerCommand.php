<?php

namespace Chapdel\Installer\Commands;

use Illuminate\Console\Command;

class InstallerCommand extends Command
{
    public $signature = 'app-installer';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
