<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Ticket;

class Comment extends Model
{
    public function ticket()
    {
    	return $this->belongsTo(Ticket::class);
    }

    protected $guarded = ['id'];

}
