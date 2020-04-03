<?php

namespace App\Notifications;

use App\ContactMessage;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NewContactMessage extends Notification
{
    use Queueable;
    private $contact_message;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(ContactMessage $contact_message)
    {
        $this->contact_message = $contact_message;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'title' => 'New Contact Message',
            'message' => 'We have contact message from '. $this->contact_message->name,
            'url' => route('app.contact_message.index'),
            'data' => [
                'contact_message' => $this->contact_message
            ]
        ];
    }
}
