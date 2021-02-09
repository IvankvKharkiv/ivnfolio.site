<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DeleteOldFiles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'deleteoldfiles';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Deletes all files older than 5 min.';

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
     * @return int
     */
    public function handle()
    {
        // unlink('C:\xampp\htdocs\laravelLoginTest\storage\app\livewire-tmp\.env');
        // echo (time()-fileatime('C:\xampp\htdocs\laravelLoginTest\storage\app\livewire-tmp\.env'))/60;
        // $dirfiles = 'C:\xampp\htdocs\laravelLoginTest\storage\app\public\images\videoposters';
        $dirfiles = '/home/ivnfolio/ivnfolio.site/ivankvkharkiv/laravellogintest/storage/app/livewire-tmp';
        // foreach(glob($dirfiles.'/*.*') as $file){
        //     echo $file;
        //     echo "\n";
        // }
        return 'some info';
    }
}
