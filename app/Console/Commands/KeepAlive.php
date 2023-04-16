<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class KeepAlive extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'marcosdipaolo:keepAlive';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Keeping alive front and back at Render.com with an http request every 10 minutes';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }


    public function handle(): void
    {
        $frontResponse = Http::get("https://marcosdipaolo.com.ar");
        $backResponse = Http::get("https://contact-z5rd.onrender.com");
        if ($frontResponse->status() === 200) Log::info("Front end keep alive command successful");
        if ($backResponse->status() === 200) Log::info("Back end keep alive command successful");
    }
}
