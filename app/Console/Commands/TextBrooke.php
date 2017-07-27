<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Twilio;

class TextBrooke extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'text:brooke';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Remind Brooke to look at Tumblr';

    /**
     * The number to text.
     *
     * @var string
     */
    protected $phone_number;

    /**
     * The message to send.
     *
     * @var string
     */
    protected $message;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->phone_number = '+14045147647';
        $this->message = 'Hi Brooke <3 Today is your lucky day! I am a robot setup by Patrick Bennett to handle communications about a new Tumblr he created to house shared content. This tumblr will house all of anything that Patrick wants you to check out. Do not miss out on these hotttt posts !!! https://www.tumblr.com/blog/tilfml';
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Twilio::message($this->phone_number, $this->message);
    }
}
