<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    // 引数で受け取る変数
    protected $content;
    public function __construct($content)
    {
        // 引数で受け取ったデータを変数にセット
        $this->content = $content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('資料をお送りいたします | 舞浜大学')
                    ->view('mails.mail')
                    ->with(['content' => $this->content]);
    }
}
