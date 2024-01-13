<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ConfirmationNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
     public $token;
    public function __construct($tokens)
    {
        $this->token=$tokens;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        $url='/confirmation/'.$this->token;
        return (new MailMessage)
        ->subject("Confirmation de l'adresse e-mail")
        ->greeting('Cher utilisateur')
        ->line('Nous sommes ravis de vous accueillir sur la plateforme Elite-Monetix ! Votre inscription a été effectuée avec succès.')
        ->line('Pour confirmer votre adresse e-mail et activer votre compte, veuillez cliquer sur le lien ci-dessous :')
        ->action('Confirmer mon adresse e-mail', url($url))
        ->line("Si vous ne pouvez pas cliquer sur le lien, veuillez le copier et le coller dans la barre d'adresse de votre navigateur.")
        ->line('Une fois votre adresse e-mail confirmée, vous aurez accès à toutes les fonctionnalités de Elite-Monetix. Vous pourrez gérer vos finances, effectuer des transactions, suivre vos investissements, et bien plus encore.')
        ->line("Merci d'avoir choisi ELite-Monetix, et nous sommes impatients de vous soutenir dans vos projets financiers. Si vous avez des questions ou avez besoin d'une assistance supplémentaire, n'hésitez pas à nous contacter à l'adresse contact@eLite-monetix.com.")
        ->salutation("L'équipe Elite-Monetix");
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
