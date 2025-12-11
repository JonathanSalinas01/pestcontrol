<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactoMailable extends Mailable
{
    use Queueable, SerializesModels;

   use Queueable, SerializesModels;

    public $contacto; // Variable pública para pasar los datos

    public function __construct($data)
    {
        $this->contacto = $data;
    }

    public function build()
    {
        return $this->subject('Nuevo mensaje de contacto - PestControl')
                    ->view('emails.contacto'); // Esta vista la crearemos en el Paso 3
    }
}
