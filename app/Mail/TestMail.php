<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;


    protected $data;


    // $message->from('john@johndoe.com', 'John Doe');
    //     $message->sender('john@johndoe.com', 'John Doe');
    //     $message->to('john@johndoe.com', 'John Doe');
    //     $message->cc('john@johndoe.com', 'John Doe');
    //     $message->bcc('john@johndoe.com', 'John Doe');
    //     $message->replyTo('john@johndoe.com', 'John Doe');
    //     $message->subject('Subject');
    //     $message->priority(3);
    //     $message->attach('pathToFile');

    

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->data = [
            'sender_name' => 'John Doe',
            'sender_email' => 'john@johndoe.com',
            'subject' => 'Subject',
            'recipient_name' => 'Janki Doodle',
            'recipient_email' => 'janki@jankidoodle.com',
            'message' => 'Hello friend!'
        ];
        
        // $this->data['sender_name'] = $form['name'];
        // $this->data['sender_email'] = $form['email'];
        // $this->data['message'] = $form['message'];

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        
        
        return $this->view('mail.site_form.blade', $this->data);
    }
}
