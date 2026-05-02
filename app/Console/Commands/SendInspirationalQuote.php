<?php

namespace App\Console\Commands;

use App\Models\Quote;
use App\Models\Subscriber;
use App\Notifications\DailyInspirationalQuote;
use Illuminate\Console\Command;

class SendInspirationalQuote extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-inspirational-quote';
    protected $description = 'Send daily inspirational quotes to subscribers';

    /**
     * The console command description.
     *
     * @var string
     */

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $quote = Quote::inRandomOrder()->first();

        $quoteText = $quote->text;
        $quoteAuthor = $quote->author;

        $subscribers = Subscriber::all();

        foreach ($subscribers as $subscriber) {
            $subscriber->notify(new DailyInspirationalQuote($quoteText, $quoteAuthor, $subscriber->email));
        }

        $this->info('Daily inspirational quotes sent to subscribers.');
    }
}
