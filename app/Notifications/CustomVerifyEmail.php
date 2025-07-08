<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;

use Illuminate\Auth\Notifications\VerifyEmail as BaseVerifyEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CustomVerifyEmail extends BaseVerifyEmail
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    // public function via(object $notifiable): array
    // {
    //     return ['mail'];
    // }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail($notifiable)
    {
        $verifyUrl = $this->verificationUrl($notifiable);
        return (new MailMessage)
            ->subject('Verifikasi Email Anda - Balai Kelurahan Kalkid')
            ->greeting('Halo!')
            ->line('Silakan klik tombol di bawah untuk verifikasi email Anda.')
            ->action('Verifikasi Sekarang', $verifyUrl)
            ->line('Jika Anda tidak membuat akun, abaikan email ini.')
            ->salutation('Salam hangat, Balai Kelurahan Kalkid');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
