<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;


class PetCreated
{
    use Dispatchable, SerializesModels;

    public $pet;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($pet)
    {
        $this->pet = $pet;
    }
}
