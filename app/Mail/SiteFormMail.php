<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SiteFormMail extends Mailable
{
    use Queueable, SerializesModels;

    // Поле для переданных в Класс данных
    public $details;
    // поле заготовленых данных, для представление шаблона письма
    public $mail_env;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {   
        $this->mail_env = [
            // Представление(Class View) для письма, переопределить при вызове класса.
            'mail_view' => 'mail.site_form',
            // Заготовки переменных для шаблоба Blade предсталения.
            'sender_name' => 'John Doe',
            'sender_email' => 'john@johndoe.com',
            'sender_name' => 'Janki Doodle',
            'recipient_email' => 'janki@jankidoodle.com',
            'message' => 'Hello friend!',

            'subject' => 'Письмо отправлено с Контактной формы сайта ' . env('APP_URL'),


        ];

        // Внедрение данных в локальное поле класса.
        // поле типа public будет видимо в зависимом шаблоне.
        // В этом конкретном классе данные получаем из полей формы Contacts Form Странички "Наши Контакты"
        // ['name' =>'' ,'message' =>'', 'email' =>]
        // В шаблоне к ним будет доступ через ячейки асоциотивного массива  {{ $details['name'] }}
        // Можно также через массив предеать и название шаблоба для отображеиния $details['view']
        
        //    $this->mail_env['mail_view'] = $details['view'];

        $this->details = $details;

        // dd($this->mail_env);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {   
        return $this->from( $this->details['email'],$this->details['name'])
                    ->to('kirill.gorodnov@gmail.com','Kirill')
                    // ->subject( $this->mail_env['subject'])
                    ->subject( 'Письмо отправлено с Контактной формы сайта ' . env('APP_URL'))
                    ->bcc('indexfactor@yandex.ru','Index Factor')
                    ->view($this->mail_env['mail_view']);

        
    }
}
