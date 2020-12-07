<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class JobApplication extends Mailable
{
    use Queueable, SerializesModels;

    private $data = null;
    private $attachmentFile = null;
    private $attachmentName = null;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $attachmentFile = null, $attachmentName = null)
    {
        $this->data = $data;
        $this->attachmentFile = $attachmentFile;
        $this->attachmentName = $attachmentName;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if($this->attachmentFile){
            return $this->from($this->data['email'])
                ->with($this->data)
                ->view('emails.job_application')->attachData(
                    $this->attachmentFile,
                    $this->attachmentName
                );

                /*
                ->attachData($this->attachmentFile, 'tezt.pdf', [
                    'mime' => 'application/pdf',
                ]);
                */
        }
        else{
            return $this->from($this->data['email'])
                ->with($this->data)
                ->view('emails.job_application');
        }
    }
}
