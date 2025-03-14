<?php

namespace App\Listeners;

use App\Events\UserUpdated;
use App\Models\Subscription;
use App\Notifications\UserUpdated as UserUpdatedNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendUserUpdatedNotification
{
    /**
     * Handle the event.
     */
    public function handle(UserUpdated $event)
    {
        $subscriptions = Subscription::all();
        foreach ($subscriptions as $subscription) {
            \Notification::route('mail', $subscription->email)
                         ->notify(new UserUpdatedNotification($event->user));
        }
    }
}