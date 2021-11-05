<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Mail;
use App\Mail\TestMail;
use App\Mail\SiteFormMail;
class SendMailFromWebForm implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $data;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        // dd($data);
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {   
        // $admin_mail='indefactor@yandex.ru';

        Mail::send(new SiteFormMail($this->data));
        // to($admin_mail)->
                // ->from('noreplay@admin.com' ,'Mail Service');
/*        
        // dd($data);

        // dd();
        // Mail::send('mail.site_form2', ['data' => $data], function($message) use($data) {
        //     
        //         Определить переменные:
        //             Кому отправлять, допустим отдел по связям.
        //             Копию в ящик админа сайта лдя контроля.
        //                
        //     $mail_admin = 'idexfactor@yandex.ru';
        //     $admin_name = 'Index Factor';
            
        //     $mail_depatment = 'sales@hasyl.com';
        //     $depatment_name = 'sales@hasyl.com';

        //     $message->from( $data['email'], $data['name']);
        //     $message->to( $mail_depatment, $depatment_name);
        //     $message->cc($mail_admin, $admin_name);
        //     $message->subject('Request for Call. Site Contact Form.');
        //     });


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
            // 

*/        
        
    }
}

/**
 * IronMQ Message Queue as a Service
 * https://elements.heroku.com/addons/iron_mq
 * 
 * Очереди сообщений: сравнение Beanstalkd, IronMQ и Amazon SQS
 * https://coderlessons.com/articles/php/ocheredi-soobshchenii-sravnenie-beanstalkd-ironmq-i-amazon-sqs
 * 
 * https://www.iron.io/mq
 * 
 */
