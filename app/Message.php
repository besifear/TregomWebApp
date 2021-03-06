<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    use SoftDeletes;

    protected $fillable=[
        'subject', 'content', 'sender_id', 'reciever_id','status'
    ];

    public function sender(){
        return $this->hasOne('App\User','id','sender_id');
    }
}
