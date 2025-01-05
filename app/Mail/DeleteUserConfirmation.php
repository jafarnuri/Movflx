<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DeleteUserConfirmation extends Mailable
{
    use SerializesModels;

    public $confirmationCode;

    public function __construct($confirmationCode)
    {
        $this->confirmationCode = $confirmationCode;
    }

    public function build()
    {
        return $this->subject('Hesabınızı Silmək üçün Təsdiq Kodu')
            ->view('emails.delete_user_confirmation');
    }
}
