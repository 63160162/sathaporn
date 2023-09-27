<?php

namespace App\Notifications;

use App\Models\Post;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class MentionedInPost extends Notification
{
    use Queueable;

    public $post;
    public $mentioningUser;

    /**
     * Create a new notification instance.
     */
    public function __construct(Post $post, User $mentioningUser)
    {
        $this->post = $post;
        $this->mentioningUser = $mentioningUser;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toDatabase($notifiable)
    {
        return [
            'post_id' => $this->post->id,
            'mentioning_user_id' => $this->mentioningUser->id,
            'mentioning_user_name' => $this->mentioningUser->name,
        ];
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
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'post_id' => $this->post->id,
            'mentioning_user_id' => $this->mentioningUser->id,
            'mentioning_user_name' => $this->mentioningUser->name,
        ];
    }
}
