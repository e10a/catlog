<?php

namespace App;

use App\Events\PetCreated;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $guarded = [];

    protected $dispatchesEvents = [
        'created' => PetCreated::class
    ];

    protected static function boot()
    {
        parent::boot();
        static::created(function ($pet) {
            // \Mail::to($pet->owner->email)->send(
            //     new PetCreated($pet)
            // );
        });
    }
    public function owner()
    {
        return $this->belongsTo(User::class);
    }
}
