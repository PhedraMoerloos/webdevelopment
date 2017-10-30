<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendWinnerMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:winnermail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send a mail to the competition manager and winner at the end of the period.';

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


        //die specifieke mail versturen (uit map mail)


    }
}