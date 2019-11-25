<?php

namespace App\Console\Commands;

use App\Http\Controllers\UserController;
use Illuminate\Console\Command;

class Users extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:update {id} {comments}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'User related operation';

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
    public function handle(UserController $user)
    {
        $arguments = $this->argument();

        if(isset($arguments['id']) && !empty($arguments['id'])){
            $id = $arguments['id'];
        }
        else{
            $this->error('Missing key/value for id');
        }
        if(isset($arguments['comments']) && !empty($arguments['comments'])){
            $comments = $arguments['comments'];
        }
        else{
            $this->error('Missing key/value for comments');
        }

        if (!is_numeric($id))
            $this->error('Invalid id');


        if(!empty($user->updateData($id, $comments))){
            $message = json_decode($user->updateData($id, $comments));
            $this->info("OK");
        }
        else{
            $this->info('Could not update database');
        }
    }
}
