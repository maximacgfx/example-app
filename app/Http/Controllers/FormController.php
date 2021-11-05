<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SiteFormMail;
use App\jobs\SendMailFromWebForm;
use Mail;

class FormController extends Controller
{ 
    public function sendmail(Request $request)
    {
        $valid_mess = [
                'required'=>'Поле :attribute обязательно для заполнения.',
                'email'=>'Поле :attribute должно соответствовать адресу.'
        ]; 
        $this->validate(
            $request,
                [
                    'name' =>'required|max:255',
                    'email' =>'required|email',
                    'message' =>'required',

                ],
            $valid_mess);
        
        $data = $request->except('_token');
        
        // Добавляем данные для передачи в класс письма.
        $data['title'] = 'Сообщение из формы.'; 
        $data['body'] = 'This is for testing email using smtp.'; 
            
         // отправить письмо через Диспетчер Очереди       
        // SendMailFromWebForm::dispatch($data)->onQueue('default');

        // отправить письмо обычным способом.
        Mail::send(new SiteFormMail($data));
        
        return redirect()->route('contacts')->with('message','Email is send.');
       
        // $res = Mail::to('your_receiver_email@gmail.com')->send(new SiteFormMail($details));


        // dd($data) ;
        
        // Mail::send('mail.site_form2', ['data' => $data], function($message) use($data) {
        //     /*
        //         Определить переменные:
        //             Кому отправлять, допустим отдел по связям.
        //             Копию в ящик админа сайта лдя контроля.
        //     */             
        //     $mail_admin = 'asd@yandex.ru';
        //     $admin_name = 'Asd Sd';
            
        //     $mail_depatment = 'sales@hasyl.com';
        //     $depatment_name = 'sales@hasyl.com';

        //     $message->from( $data['email'], $data['name']);
        //     $message->to( $mail_depatment, $depatment_name);
        //     $message->cc($mail_admin, $admin_name);
        //     $message->subject('Request for Call. Site Contact Form.');
        //     });


        // dd($data);

        


            // Mail::send('Html.view', $data, function ($message) {
            //     $message->from('john@johndoe.com', 'John Doe');
            //     $message->sender('john@johndoe.com', 'John Doe');
            //     $message->to('john@johndoe.com', 'John Doe');
            //     $message->cc('john@johndoe.com', 'John Doe');
            //     $message->bcc('john@johndoe.com', 'John Doe');
            //     $message->replyTo('john@johndoe.com', 'John Doe');
            //     $message->subject('Subject');
            //     $message->priority(3);
            //     $message->attach('pathToFile');
            // }
        /*------------------------------------------------------------
        
        $details = [
            'title' => 'Mail from ItSolutionStuff.com',
            'body' => 'This is for testing email using smtp'
        ];
       
        Mail::to('your_receiver_email@gmail.com')->send(new SiteFormMail($details));

        ------------------------------------------------------------*/            

    }

}
/*

https://laravel.com/docs/8.x/mail

How to Configure PHPMailer in Laravel 8 For Sending Email
https://programmingfields.com/phpmailer-library-configuration-laravel-8-for-sending-emails/

Laravel 8 Mail | Laravel 8 Send Email Tutorial
https://www.itsolutionstuff.com/post/laravel-8-mail-laravel-8-send-email-tutorialexample.html

Вменяемая инструкция к PHPMailer “Отправка писем и файлов на почту”
https://shpaginkirill.medium.com/вменяемая-инструкция-к-phpmailer-отправка-писем-и-файлов-на-почту-b462f8ff9b5c

Как использовать smtp.yandex.ru в laravel?
https://qna.habr.com/q/253288

Swift Mailer: A feature-rich PHP Mailer
https://swiftmailer.symfony.com/docs/introduction.html

*/