<?php

namespace ZeroToProd\LaravelQueryString\Commands;

use Illuminate\Console\Command;

class LaravelQueryStringCommand extends Command
{
    public $signature = 'laravel-query-string';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
