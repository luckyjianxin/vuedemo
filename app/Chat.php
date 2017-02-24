<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    //

    protectd $fillable = [
    	'sender_id', 'receiver_id','chat','read'
    ]

    protectd $appends = ['sender', 'receiver'];

    public function getSenderAttribute()
    {
    	return User::where('id', $this->sender_id)->first();
    }

    public function getReceiverAttribute()
    {
		return User::where('id', $this->receiver_id)->first();
    }
}
