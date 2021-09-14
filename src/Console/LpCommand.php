<?php

namespace lemonpatwari\BanglaNumber\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;


class LpCommand extends Command
{
    protected $hidden = false; // if hidden on the command class then use true

    protected $signature = 'banglaNumber:install';

    protected $description = 'Install the bangla number';

    public function handle()
    {
        $this->info('Installing ...');

//        $this->publishConfiguration();
        $this->info('Published configuration');

        exec('composer dump-autoload');
        $this->info('composer dump-autoload complete.');

        $this->info('Installed.');
    }

    private function publishConfiguration($forcePublish = false)
    {
        $params = [
            '--provider' => "lemonpatwari\BanglaNumber\EnglishNumberToBanglaNumberProvider"
        ];

        if ($forcePublish === true) {
            $params['--force'] = true;
        }

        $this->call('vendor:publish', $params);
    }
}
