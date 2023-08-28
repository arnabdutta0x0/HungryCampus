<?php

namespace App\Listeners;

use App\Events\CodeExpired;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class DeleteExpiredCode
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    use InteractsWithQueue;

    public function handle(CodeExpired $event)
    {
        $event->code->delete();
    }
}
