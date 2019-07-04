<?php

namespace App\Listeners;

use App\Events\PetCreated;
use Illuminiate\Support\Facades\Mail;
use App\Mail\PetCreated as PetCreatedMail;

class SendPetCreatedNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  PetCreated  $event
     * @return void
     */
    public function handle(PetCreated $event)
    {
        \Mail::to($event->pet->owner->email)->send(
            new PetCreatedMail($event->pet)
        );
    }
}
