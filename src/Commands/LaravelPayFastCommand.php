<?php

namespace EllisSystems\LaravelPayFast\Commands;

use Illuminate\Console\Command;

class LaravelPayFastCommand extends Command
{
    public $signature = 'laravel-payfast';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
