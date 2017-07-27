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
        //@todo make random compliment generator
        //@todo make listener for any new content
        //@todo make message contain new content
        parent::__construct();
        $this->phone_number = '+14045796767';
        $this->message = 'Hi Brooke. You look beautiful today <3 Do not miss out on these hotttt new posts by Patrick !!! https://tilfml.tumblr.com/';
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
