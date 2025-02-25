<?php

namespace App\Mail;

use App\Models\Rental;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RentalCanceled extends Mailable
{
    use SerializesModels;

    public $rental;

    public function __construct(Rental $rental)
    {
        $this->rental = $rental;
    }

    public function build()
    {
        return $this->subject('Your Rental Has Been Canceled')
                    ->view('emails.rental_canceled');
    }
}

