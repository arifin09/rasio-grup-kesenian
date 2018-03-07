<?php

namespace Bantenprov\RasioBankDunia\Console\Commands;

use Illuminate\Console\Command;

/**
 * The RasioBankDuniaCommand class.
 *
 * @package Bantenprov\RasioBankDunia
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class RasioBankDuniaCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bantenprov:rasio-grup-kesenian';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Demo command for Bantenprov\RasioBankDunia package';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('Welcome to command for Bantenprov\RasioBankDunia package');
    }
}
