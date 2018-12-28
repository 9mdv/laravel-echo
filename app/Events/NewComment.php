<?php

namespace App\Events;

<<<<<<< HEAD
use App\Comment;
=======
>>>>>>> tutorial
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
<<<<<<< HEAD
=======
use App\Comment;
>>>>>>> tutorial

class NewComment implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

<<<<<<< HEAD

=======
>>>>>>> tutorial
    public $comment;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Comment $comment)
    {
<<<<<<< HEAD
      $this->comment = $comment;
=======
        $this->comment = $comment;
>>>>>>> tutorial
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
<<<<<<< HEAD
        return new PrivateChannel('post.'.$this->comment->post->id);
=======
        // return new Channel('post-' . $this->comment->post->id);
        return new PrivateChannel('post-' . $this->comment->post->id);
>>>>>>> tutorial
    }

    public function broadcastWith()
    {
<<<<<<< HEAD
      return [
        'body' => $this->comment->body,
        'created_at' => $this->comment->created_at->toFormattedDateString(),
        'user' => [
          'name' => $this->comment->user->name,
          'avatar' => 'http://lorempixel.com/50/50'
        ]
      ];
=======
        return [
            'body' => $this->comment->body,
            'created_at' => $this->comment->created_at->toFormattedDateString(),
            'user' => [
                'name' => $this->comment->user->name,
                'avatar' => 'http://lorempixel.com/50/50/'
            ]
        ];
>>>>>>> tutorial
    }
}
