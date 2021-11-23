<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        // dd(json_decode($data, true));
        $this->data = json_decode($data, true);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->from('admin@schicher.com')->subject('Test send mail')->view('pages.index')->with('data', $this->data);
        return $this->from('admin@schicher.com')->subject('คำขอข้อเสนอพิเศษจาก Web schicher')->view('pages.send_mail_format')->with('data', $this->data);
    }
}
