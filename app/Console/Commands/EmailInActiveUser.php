<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Models\User;
use App\Notifications\NotifyInactiveUser;

class EmailInActiveUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:inactive-user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Email in InActive users hourly';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $last_login = Carbon::now();

        $InActiveUser = User::where('last_login','<',$last_login)->get();

        foreach ($InActiveUser as $key => $user) {
            $user->notify(new NotifyInactiveUser($user));
        }

    }
}
