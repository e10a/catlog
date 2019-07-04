<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PetCreated extends Mailable
{
    use Queueable, SerializesModels;
    public $pet;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($pet)
    {
        $this->pet = $pet;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.pet-created');
    }
}
