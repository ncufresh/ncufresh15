<?php

namespace App\Console;

use App\User;
use App\Bottle;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        \App\Console\Commands\Inspire::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        //$schedule->command('inspire')
        //         ->hourly();
        $schedule->call(function() {
            touch('/tmp/bottle.send');
            Bottle::where('content', '')->delete();
            $bottles = Bottle::where('sent', 0)->orderBy('token', 'asc')->get();

            if ($bottles != null) {
                $bottles_num = count($bottles);
                if ($bottles_num > 1) {
                    $first_owner = $bottles[0]->owner;
                    for($i=0;$i<$bottles_num-1;$i++) {
                        $theuser = User::find($bottles[$i]->owner);
                        if ($theuser != null) {
                            $theuser->newmail = true;
                            $theuser->save();
                        }
                        $bottles[$i]->owner = $bottles[$i+1]->owner;
                        $bottles[$i]->sent = 1;
                        $bottles[$i]->save();
                    }
                    $theuser = User::find($bottles[$bottles_num-1]->owner);
                    if ($theuser != null) {
                        $theuser->newmail = true;
                        $theuser->save();
                    }
                    $bottles[$bottles_num-1]->owner = $first_owner;
                    $bottles[$bottles_num-1]->sent = 1;
                    $bottles[$bottles_num-1]->save();
                } elseif ($bottles_num == 1) {
                    $bottles[0]->delete(); 
                }
            }

            // give away new ones;
            $users = User::all();
            foreach($users as $user) {
                $newBottle = new Bottle;
                $newBottle->owner = $user->id;
                $newBottle->token = bin2hex(openssl_random_pseudo_bytes(16));
                $newBottle->save();
            }
        })->daily();
    }
}
