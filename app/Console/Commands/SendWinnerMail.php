<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Competition;

use Illuminate\Support\Facades\Mail;
use App\Mail\WinnerOfPeriod;


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

        /*Competition manager mail sturen*/
        $recipient = Competition::first()->competition_manager_email;

        /*Winner mail sturen*/
        $period_now = Period::Determine_period();
        $winner = Participant::where([
          ['is_winner', '1'],
          ['period_id', $period_now]
        ])->first()->email;

        Mail::to($recipient)->send(new WinnerOfPeriod());
        Mail::to($winner)->send(new WinnerOfPeriod());

    }

}
