<?php
/**
 * Created by PhpStorm.
 * User: gradydong
 * Date: 2019/10/29
 * Time: 14:43
 */
namespace App\Console\Commands\Accounts;

use Illuminate\Console\Command;

class User extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Accounts:User';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '';

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
        return true;
    }
}