<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ResetPasswordNotification extends Notification
{
    use Queueable;

    public $token; 
    public $user;
    public $nip;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($token, $user, $nip = null)
    {
        $this->token = $token; 
        $this->user = $user; 
        $this->nip = $nip; 
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)->view(
                "recovery-password", 
                [
                    'user' => $this->user, 
                    'token' => $this->token, 
                    'nip' => $this->nip
                ]
            )->subject("Recuperación de contraseña");
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [ ];
    }
}
