<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PostCreatedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $post;
    /**
     * Create a new message instance.
     */
    public function __construct($post)
    {
        $this->post = $post;
    }

    /**
     * Get the message envelope.
     */
    // Metodo que permite definir el asunto y la persona que lo envia
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('maximilianorivas01@gmail.com', 'Maximiliano Rivas'),
            subject: 'Post pór publicar',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            // Definicion de Contenido por Vista
            // view: 'emails.post-created',
            // Definicion de contenido por plantilla
            markdown: 'emails.post-created2',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
