<?php

namespace App\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotificationEmail extends Mailable
{
    use Queueable, SerializesModels;

    protected  $data ;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    //public function __construct(Notification $data)
    public function __construct( $dane)
    {
      $this->data =  $dane;
      //dd($data);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.notification')
        ->with([
                        'desktopNr' => $this->data->desktopNr,
                        'email'     => $this->data->email,
                        'message'   => $this->data->message,
                    ]);
    }
}
