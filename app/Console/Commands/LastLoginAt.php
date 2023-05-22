<?php

namespace App\Console\Commands;

use App\Http\Controllers\LoginController;
use App\Models\User;
use Illuminate\Console\Command;

class LastLoginAt extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:lastloginat';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    private $loginController;

    public function __construct(LoginController $loginController)
    {
        parent::__construct();
        $this->loginController = $loginController;
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->loginController->lastLoginCronJob();
    }
}
