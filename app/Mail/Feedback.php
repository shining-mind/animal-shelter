<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Feedback extends Mailable
{
    use Queueable, SerializesModels;

    public string $email;
    public string $text;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(string $email, string $text)
    {
        $this->email = $email;
        $this->text = strip_tags($text);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject(trans('messages.feedback'))->view('mail.feedback', ['subject' => trans('messages.feedback')]);
    }
}
