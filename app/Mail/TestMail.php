<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;


    public $data;


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
    public function __construct($data)
    {

        $this->data = $data;
        // $this->data = [
        //     'sender_name' => 'John Doe',
        //     'sender_email' => 'john@johndoe.com',
        //     'subject' => 'Subject',
        //     'recipient_name' => 'Janki Doodle',
        //     'recipient_email' => 'janki@jankidoodle.com',
        //     'message' => 'Hello friend!'
        // ];

        
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
               
        // $subject = 'Письмо отправлено с Контактной формы сайта ' . env('APP_URL');


        return $this->from( $this->data['email'],$this->data['name'])
                    ->to('kirill.gorodnov@gmail.com','Kirill')
                    // ->subject($subject)
                    ->subject('Письмо отправлено с Контактной формы сайта ' . env('APP_URL'))
                    ->bcc('indexfactor@yandex.ru','Index Factor')
                    ->view('mail.site_form');
    }
}
