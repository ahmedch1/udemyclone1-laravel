<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminMailOnOrder extends Mailable
{
    use Queueable, SerializesModels;
    public $x, $order;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($x, $order)
    {
        $this->x = $x;
        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.AdminMailOnOrder')->subject('User Enrolled');
    }
}
